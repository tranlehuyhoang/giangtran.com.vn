<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Password;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\User; // Import model User
use Illuminate\Validation\ValidationException;

class ForgotPassword extends Component
{
   
    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}