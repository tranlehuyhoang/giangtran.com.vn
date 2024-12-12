<?php

namespace App\Livewire\Auth\ForgotPassword;

use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Password;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\User; // Import model User
use Illuminate\Support\Facades\Mail;

class Form extends Component
{
    use LivewireAlert;

    public $email;

    public function sendResetLink()
    {
        // Kiểm tra xem email có tồn tại trong hệ thống không
        $user = User::where('email', $this->email)->first();

        if (!$user) {
            $this->alert('error', 'Email không tồn tại trong hệ thống.');
            return;
        }

        // Tạo token cho việc đặt lại mật khẩu
        $token = app('auth.password.broker')->createToken($user);

        // Gửi email tùy chỉnh
        Mail::to($this->email)->send(new ResetPasswordMail($token, $this->email));

        $this->alert('success', 'Email đã được gửi. Vui lòng kiểm tra email của bạn.');
    }

    public function render()
    {
        return view('livewire.auth.forgot-password.form');
    }
}
