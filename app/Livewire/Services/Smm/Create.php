<?php

namespace App\Livewire\Services\Smm;

use Livewire\Component;
use App\Models\SmmCategory;
use App\Models\SmmService;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{

    public function render()
    {
        return view('livewire.services.smm.create', [
        ]);
    }
}