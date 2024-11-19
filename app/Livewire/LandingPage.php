<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LandingPage extends Component
{
    public function mount()
    {
        if (Auth::check()) {
            return redirect('/home');
        }
    }

    public function render()
    {
        return view('livewire.landing-page');
    }
}