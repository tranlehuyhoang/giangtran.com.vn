<?php

namespace App\Livewire\Inc;

use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
class Header extends Component
{
    use LivewireAlert;
    public $title;
    public $description;
    public function mount($title = null, $description = null)
    {
        $this->title = $title ?? 'Trang Khách Hàng';
        $this->description = $description ?? 'Trang khách hàng';
    }
    public function render()
    {
     
        return view('livewire.inc.header');
    }
    public function logout()
    {
        Auth::logout();
        $this->alert('success', 'Đăng xuất thành công');
    }

}
