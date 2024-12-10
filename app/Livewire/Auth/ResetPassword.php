<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Request;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class ResetPassword extends Component
{
    use LivewireAlert;

    public function mount()
    {

    }
    #[Layout('components.layouts.auth')]

    public function render()
    {
        return view('livewire.auth.reset-password');
    }
}
