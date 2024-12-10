<?php

namespace App\Livewire\Page;

use Livewire\Attributes\Layout;
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
    #[Layout('components.layouts.landingpage')]

    public function render()
    {
        return view('livewire.page.landing-page');
    }
}
