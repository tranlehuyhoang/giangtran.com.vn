<?php

namespace App\Livewire\Page;

use Auth;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class Home extends Component
{
    use LivewireAlert;
    public function logout()
    {
        Auth::logout();
        $this->alert('success', 'Đăng xuất thành công');
        return redirect('/home');
    }
    public function render()
    {
        return view('livewire.page.home');
    }
}
