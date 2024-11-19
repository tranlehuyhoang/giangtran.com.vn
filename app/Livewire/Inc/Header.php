<?php

namespace App\Livewire\Inc;

use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
class Header extends Component
{
    use LivewireAlert;
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
