<?php

namespace App\Livewire\Services\Smm\Components;

use App\Models\SmmCategory;
use App\Models\SmmOrder;
use App\Models\SmmService;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Form extends Component
{
    use LivewireAlert;
    public $categories; // Danh sách danh mục
    public $selectedCategory; // Danh mục đã chọn
    public $selectedService; // Dịch vụ đã chọn
    public $services = []; // Danh sách dịch vụ theo danh mục
    public $quantity = 1; // Danh sách dịch vụ theo danh mục
    public $link; // Danh sách dịch vụ theo danh mục
    public $image; // Danh sách dịch vụ theo danh mục
    public function mount()
    {
         // Lấy tất cả danh mục
         $this->categories = SmmCategory::getAllCategories();
         $this->image = SmmCategory::first()->image; // Khởi tạo danh sách dịch vụ theo danh mục
         $this->selectedCategory = SmmCategory::first()->id;
         $this->services = SmmService::where('smmcategory_id', $this->selectedCategory)->get();

    }
    public function updatedSelectedCategory()
    {
        $this->services = SmmService::where('smmcategory_id', $this->selectedCategory)->get();
        
        $this->image = $this->categories->where('id', $this->selectedCategory)->first()->image;
    }
    public function submitOrder() // Hàm submit đơn hàng
    {
      $order  = SmmOrder::createOrder([
            'user_id' => auth()->user()->id ?? null,
            'smm_service_id' => $this->selectedService ?? null,
            'quantity' => $this->quantity ?? null,
            'total_price' => $this->getServicePrice($this->selectedService) * $this->quantity ?? null,
            'status' => 'pending',
            'unit_price' => $this->getServicePrice($this->selectedService) ?? null,
            'start_count' => 0 ?? null,
            'link' => $this->link ?? null,
            'remains' => $this->quantity ?? null,
        ]);
       
        if($order['status']){
            $this->alert($order['status'], $order['message']);
        } 
    }
    public function findService($id){

        if(SmmService::find($id)){
            return SmmService::find($id);
        }
        return null;
    }
    public function getServicePrice($id){

        if(SmmService::find($id)){
            return SmmService::find($id)->price;
        }
        return null;
    }
    public function render()
    {
        return view('livewire.services.smm.components.form');
    }
}