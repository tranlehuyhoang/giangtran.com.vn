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



    public  $selectedCategory, $selectedService , $quantity = 1000, $link, $image, $paymentMethod; // Danh sách danh mục
    public function mount()
    {
        $this->balance = Auth::user()->balance ?? 0; // Mặc định là 0 nếu không có balance
        // $this->selectedCategory = SmmCategory::first()->id;

    }
    // public function updatedSelectedCategory()
    // {
    //     $this->services = SmmService::where('smmcategory_id', $this->selectedCategory)->get();
    //     $category = SmmCategory::find($this->selectedCategory);


    // }

    public function submitOrder() // Hàm submit đơn hàng
    {
        dd($this->selectedCategory);
        // if (!auth()->user()) {
        //     $this->alert('error', 'Vui lòng đăng nhập để tạo đơn hàng');
        //     return;
        // }
        // $data = [
        //     'user_id' => auth()->user()->id ?? null,
        //     'smm_service_id' => $this->selectedService ?? null,
        //     'quantity' => $this->quantity ?? null,
        //     'total_price' => $this->getServicePrice($this->selectedService) * $this->quantity ?? null,
        //     'status' => 'pending',
        //     'unit_price' => $this->getServicePrice($this->selectedService) ?? null,
        //     'start_count' => 0 ?? null,
        //     'link' => $this->link ?? null,
        //     'remains' => $this->quantity ?? null,
        //     'payment_method' => $this->paymentMethod ?? null,
        // ];
        // if (Invoice::hasUnpaidInvoices()) {


        //     $this->dispatch('showModalAlert', [
        //         'title' => 'Thông báo',
        //         'message' => 'Bạn có hóa đơn chưa thanh toán, vui lòng thanh toán hóa đơn trước khi tạo đơn hàng mới',
        //     ]);
        //     return;
        // }
        // $order = SmmOrder::createOrder($data);
        // if ($order['status']) {
        //     $this->reset('quantity', 'link', 'paymentMethod', 'selectedService');
        //     if (isset($order['payment_status']) && $order['payment_status'] == 'pending') {
        //         return redirect('hoa-don/' . $order['order_code']);
        //     } else {
        //         $this->alert($order['status'], $order['message']);
        //     }
        // }
    }


    public function getServicePrice($id)
    {

        if (SmmService::find($id)) {
            return SmmService::find($id)->price;
        }
        return null;
    }
    // public function incrementQuantity($amount)
    // {
    //     $this->quantity += $amount; // Tăng số lượng với giá trị được truyền vào
    // }
    public function updatedSelectedCategory()
    {
        // Emit an event to reinitialize Select2
        $this->dispatch('select2:updated');
    }

    public function render()
    {
        // Get all categories with their media
        $categories = SmmCategory::with('media')->get();

        // Get all services associated with the selected category
        $services = SmmService::where('is_active', 1)->get();
        return view('livewire.services.smm.components.form', [
            'categories' => $categories,
            'services' => $services,
        ]);
    }
}
