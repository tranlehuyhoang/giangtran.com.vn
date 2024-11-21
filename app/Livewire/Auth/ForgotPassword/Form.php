<?php

namespace App\Livewire\Auth\ForgotPassword;

use Illuminate\Support\Facades\Password;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\User; // Import model User
use Illuminate\Validation\ValidationException;


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

        // Gửi liên kết đặt lại mật khẩu
        $response = Password::sendResetLink(['email' => $this->email]);

        if ($response == Password::RESET_LINK_SENT) {
            $this->alert('success', trans('Email đã được gửi. Vui lòng kiểm tra email của bạn.'));
        } else {
            // $this->alert('error', trans($response ,[], 'vi'));
            $this->alert('error', trans('Vui lòng chờ trước khi thử lại.'));
        }
    }

    public function render()
    {
        return view('livewire.auth.forgot-password.form');
    }
}
