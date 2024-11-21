<?php

namespace App\Livewire\Services\Smm\Components;

use App\Models\SmmCategory;
use App\Models\SmmService;
use Livewire\Component;

class Form extends Component
{
    public $categories; // Danh sách danh mục
    public $selectedCategory; // Danh mục đã chọn
    public $selectedService; // Dịch vụ đã chọn
    public $services; // Danh sách dịch vụ theo danh mục
    public $quantity = 1; // Danh sách dịch vụ theo danh mục
    public $link; // Danh sách dịch vụ theo danh mục
    public function mount()
    {
         // Lấy tất cả danh mục
         $this->categories = SmmCategory::getAllCategories();
         $this->services = []; // Khởi tạo danh sách dịch vụ

    }
    public function updatedSelectedCategory()
    {
        $this->services = SmmService::where('smmcategory_id', $this->selectedCategory)->get();
        $this->selectedService = $this->services->first()->id;
    }
    public function submitOrder()
    {
        dd($this->selectedCategory, $this->selectedService, $this->quantity, $this->link);
    }
    public function render()
    {
        return view('livewire.services.smm.components.form');
    }
}
