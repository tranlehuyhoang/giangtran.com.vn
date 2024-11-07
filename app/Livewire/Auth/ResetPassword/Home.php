<?php

namespace App\Livewire\Auth\ResetPassword;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.auth.reset-password.home')->layout('components.layouts.auth');
    }
}
