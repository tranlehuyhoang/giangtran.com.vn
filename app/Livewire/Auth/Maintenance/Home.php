<?php

namespace App\Livewire\Auth\Maintenance;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.auth.maintenance.home')->layout('components.layouts.auth');
    }
}
