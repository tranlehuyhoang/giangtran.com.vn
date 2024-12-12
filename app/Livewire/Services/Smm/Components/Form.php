<?php

namespace App\Livewire\Services\Smm\Components;

use App\Models\Invoice;
use App\Models\SmmCategory;
use App\Models\SmmOrder;
use App\Models\SmmService;
use Awcodes\Curator\Models\Media;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class Form extends Component
{
    use LivewireAlert;
    public $balance;



    public $selectedCategory, $categories, $services, $selectedCategory_path, $quantity, $link, $image, $paymentMethod; // Danh sách danh mục
    public $selectedService, $selectedServicePrice, $selectedServiceMin, $selectedServiceMax, $selectedServiceTime;
    public $errors = [];
    public function mount()
    {
        $this->balance = Auth::user()->balance ?? 0;
        $this->categories = SmmCategory::with('media')->get();
        if ($this->categories->isNotEmpty()) {
            $this->selectedCategory = $this->categories->first()->id;
            $this->selectedCategory = $this->categories->first()->id;
            $this->selectedCategory_path = $this->categories->first()->media->path ?? null;
            $this->services = SmmService::where('is_active', 1)
                ->where('smmcategory_id', $this->selectedCategory)
                ->get();
        } else {
            $this->selectedCategory = null;
            $this->selectedCategory_path = null;
            $this->services = collect(); // Return an empty collection
        }

        $this->selectedService = SmmService::where('smmcategory_id', $this->selectedCategory)->first()->id;
        $this->selectedServicePrice = SmmService::where('smmcategory_id', $this->selectedCategory)->first()->price;
        $this->selectedServiceMin = SmmService::where('smmcategory_id', $this->selectedCategory)->first()->min;
        $this->selectedServiceMax = SmmService::where('smmcategory_id', $this->selectedCategory)->first()->max;
        $this->selectedServiceTime = SmmService::where('smmcategory_id', $this->selectedCategory)->first()->time;
        $this->quantity = $this->selectedServiceMin;

    }
    public function updatedSelectedCategory()
    {
        $services = SmmService::where('smmcategory_id', $this->selectedCategory)->get();

        if ($services->isNotEmpty()) {
            $this->services = $services;
            $firstService = $services->first();

            $this->selectedService = $firstService->id;
            $this->selectedServicePrice = $firstService->price;
            $this->selectedServiceMin = $firstService->min;
            $this->selectedServiceMax = $firstService->max;
            $this->selectedServiceTime = $firstService->time;
            $this->quantity = $this->selectedServiceMin;
        }

        $this->dispatch('select2:updated');
    }
    public function updatedSelectedService()
    {
        $service = SmmService::find($this->selectedService);

        if ($service) {
            $this->selectedServicePrice = $service->price;
            $this->selectedServiceMin = $service->min;
            $this->selectedServiceMax = $service->max;
            $this->selectedServiceTime = $service->time;
            $this->quantity = $service->min; // Assuming you want to set quantity to min
        }

        $this->dispatch('select2:updated');
    }
    public function updatedQuantity()
    {
        $this->dispatch('select2:updated');
    }

    public function submitOrder() // Hàm submit đơn hàng
    {
        // Reset errors before processing
        $this->errors = [];

        // Check if the user is authenticated
        if (!auth()->user()) {
            $this->errors['auth'] = 'Vui lòng đăng nhập để tạo đơn hàng';
        }

        // Validate required fields
        if (is_null($this->paymentMethod)) {
            $this->errors['paymentMethod'] = 'Vui lòng chọn phương thức thanh toán.';
        }
        if (is_null($this->selectedService)) {
            $this->errors['selectedService'] = 'Vui lòng chọn gói dịch vụ.';
        }
        if (is_null($this->selectedService)) {
            $this->errors['selectedService'] = 'Vui lòng chọn gói dịch vụ.';
        }
        if (is_null($this->quantity) || $this->quantity < $this->selectedServiceMin || $this->quantity > $this->selectedServiceMax) {
            $this->errors['quantity'] = 'Số lượng không hợp lệ. Tối thiểu: ' . $this->selectedServiceMin . ', tối đa: ' . $this->selectedServiceMax . '.';
        }
        if (empty($this->link)) {
            $this->errors['link'] = 'Vui lòng nhập link.';
        }

        // If there are errors, alert the user and return
        if (!empty($this->errors)) {
            foreach ($this->errors as $error) {
                $this->alert('error', $error); // Alert each error
            }
            $this->dispatch('select2:updated');

            return;
        }
        // Calculate total price

        $totalPrice = $this->getServicePrice($this->selectedService) * $this->quantity;

        // Get user's balance
        $userBalance = auth()->user()->balance; // Assuming 'balance' is a field in the User model

        // Check if user has sufficient balance
        if ($this->paymentMethod == 'account_balance') {
            if ($userBalance < $totalPrice) {
                $this->alert('error', 'Số dư tài khoản không đủ để thanh toán.'); // Alert insufficient balance
                $this->dispatch('select2:updated');
                return;
            }
        }

        // Check for unpaid invoices
        if (Invoice::hasUnpaidInvoices()) {
            $this->dispatch('showModalAlert', [
                'title' => 'Thông báo',
                'message' => 'Bạn có hóa đơn chưa thanh toán, vui lòng thanh toán hóa đơn trước khi tạo đơn hàng mới',
            ]);
            $this->dispatch('select2:updated');
            return;
        }

        // Prepare order data
        $data = [
            'user_id' => auth()->user()->id,
            'smm_service_id' => $this->selectedService,
            'quantity' => $this->quantity,
            'total_price' => $totalPrice,
            'status' => 'pending',
            'unit_price' => $this->getServicePrice($this->selectedService),
            'start_count' => 0,
            'link' => $this->link,
            'remains' => $this->quantity,
            'payment_method' => $this->paymentMethod,
        ];
        // Create the order
        $order = SmmOrder::createOrder($data);
        if ($order['status']) {
            // Reset form fields after successful order creation

            // Redirect based on payment status
            if (isset($order['payment_status']) && $order['payment_status'] == 'pending') {
                return redirect('hoa-don/' . $order['order_code']);
            } else {
                $this->alert($order['status'], $order['message']);
                $this->dispatch('select2:updated');
            }
        } else {
            // Handle order creation failure
            $this->alert('error', 'Đã xảy ra lỗi khi tạo đơn hàng. Vui lòng thử lại.');
        }
    }


    public function getServicePrice($id)
    {

        if (SmmService::find($id)) {
            return SmmService::find($id)->price;
        }
        return null;
    }
    public function getServiceMin($id)
    {

        if (SmmService::find($id)) {
            return SmmService::find($id)->min;
        }
        return null;
    }
    public function getServiceMax($id)
    {

        if (SmmService::find($id)) {
            return SmmService::find($id)->max;
        }
        return null;
    }
    public function getServiceTime($id)
    {

        if (SmmService::find($id)) {
            return SmmService::find($id)->time;
        }
        return null;
    }



    public function render()
    {

        return view('livewire.services.smm.components.form');
    }
}
