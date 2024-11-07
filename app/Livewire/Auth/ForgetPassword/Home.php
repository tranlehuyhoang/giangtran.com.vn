<?php

namespace App\Livewire\Auth\ForgetPassword;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.auth.forget-password.home')->layout('components.layouts.auth');
    }
}
