<?php

namespace App\Livewire\Auth\ResetPassword;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Request;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Illuminate\Support\Str;


class Form extends Component
{
    use LivewireAlert;
    public $password, $token, $email;
    public function mount()
    {
        // Lấy token và email từ query string
        $this->token = request()->query('token');
        $this->email = request()->query('email');
    }
    public function resetPassword()
    {
        if($this->password == null || $this->password == ''){
            $this->alert('error', 'Vui lòng nhập mật khẩu');
            return;
        }
        $status = Password::reset(
            ['email' => $this->email, 'password' => $this->password, 'token' => $this->token],
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();
            }
        );
        if($status == Password::PASSWORD_RESET){
            $this->alert('success', 'Đặt lại mật khẩu thành công');
            return redirect('/login');
        }else{
            $this->alert('error', 'Bạn đã đổi mật khẩu rồi');
        }
    }
    public function render()
    {
        return view('livewire.auth.reset-password.form');
    }
}
