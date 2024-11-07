<?php

namespace App\Livewire\Auth\Login;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.auth.login.home')->layout('components.layouts.auth');
    }
}
