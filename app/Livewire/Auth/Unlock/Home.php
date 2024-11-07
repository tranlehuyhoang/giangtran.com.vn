<?php

namespace App\Livewire\Auth\Unlock;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.auth.unlock.home')->layout('components.layouts.auth');
    }
}
