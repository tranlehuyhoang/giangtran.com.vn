<?php

namespace App\Livewire\Inc;

use Livewire\Component;

class Seo extends Component
{
    public $title;
    public $description;
    public $image;
    public function mount()
    {
        $this->title = $this->title ?? 'Viettel Media - Trang Đăng Ký Dịch Vụ Internet 4G 5G Cho Di Động mạng Viettel';
        $this->description = $this->description ?? 'Viettel Media Trang Đăng Ký Dịch Vụ Internet 4G 5G Cho Di Động mạng Viettel. Cách đăng ký các gói cước 4G, 5G Viettel kèm gọi nội mạng miễn phí';
        $this->image = $this->image ?? 'https://static.ladipage.net/64915c71730f460012dc49d8/banner-web-5g-20241111015356-nul73.jpg';
    }
    public function render()
    {
        return view('livewire.inc.seo');
    }
}
