<?php

namespace App\Livewire\General\Landingpage;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.general.landingpage.home')->layout('components.layouts.landingpage');  
    }
}
