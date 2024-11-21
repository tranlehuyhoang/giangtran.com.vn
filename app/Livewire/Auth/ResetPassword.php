<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Str;

class ResetPassword extends Component
{
    public $email, $token, $password, $password_confirmation;

    public function mount(Request $request)
    {
        $this->token = $request->token;
        $this->email = $request->email;
    }

    public function resetPassword()
    {
        $status = Password::reset(
            [
                'password' => $this->password,
                'token' => $this->token,
            ],
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
     
                $user->save();
     
            }
        );
    }

    public function render()
    {
        return view('livewire.auth.reset-password');
    }
}
