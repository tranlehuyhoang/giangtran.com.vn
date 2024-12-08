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



    public  $selectedCategory, $categories, $services, $selectedCategory_path  , $quantity , $link, $image, $paymentMethod; // Danh sách danh mục
    public $selectedService, $selectedServicePrice, $selectedServiceMin, $selectedServiceMax, $selectedServiceTime ;
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
        if (!auth()->user()) {
            $this->alert('error', 'Vui lòng đăng nhập để tạo đơn hàng');
            return;
        }
        $data = [
            'user_id' => auth()->user()->id ?? null,
            'smm_service_id' => $this->selectedService ?? null,
            'quantity' => $this->quantity ?? null,
            'total_price' => $this->getServicePrice($this->selectedService) * $this->quantity ?? null,
            'status' => 'pending',
            'unit_price' => $this->getServicePrice($this->selectedService) ?? null,
            'start_count' => 0 ?? null,
            'link' => $this->link ?? null,
            'remains' => $this->quantity ?? null,
            'payment_method' => $this->paymentMethod ?? null,
        ];
        if (Invoice::hasUnpaidInvoices()) {


            $this->dispatch('showModalAlert', [
                'title' => 'Thông báo',
                'message' => 'Bạn có hóa đơn chưa thanh toán, vui lòng thanh toán hóa đơn trước khi tạo đơn hàng mới',
            ]);
            return;
        }
        $order = SmmOrder::createOrder($data);
        if ($order['status']) {
            $this->reset('quantity', 'link', 'paymentMethod', 'selectedService');
            if (isset($order['payment_status']) && $order['payment_status'] == 'pending') {
                return redirect('hoa-don/' . $order['order_code']);
            } else {
                $this->alert($order['status'], $order['message']);
                $this->dispatch('select2:updated');
            }
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
