<?php

namespace App\Livewire\Auth\Register;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.auth.register.home')->layout('components.layouts.auth');
    }
}
