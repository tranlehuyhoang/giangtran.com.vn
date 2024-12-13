<?php

namespace App\Livewire\Auth\ForgotPassword;

use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Password;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\User; // Import model User
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class Form extends Component
{
    use LivewireAlert;

    public $email;
    public $lastSentAt; // Add a property to track the last sent time
    const COOLDOWN_PERIOD = 10; // Cooldown period in seconds

    public function sendResetLink()
    {
        // Kiểm tra xem email có tồn tại trong hệ thống không
        $user = User::where('email', $this->email)->first();

        if (!$user) {
            $this->alert('error', 'Email không tồn tại trong hệ thống.');
            return;
        }

        // Kiểm tra cooldown
        if ($this->lastSentAt && $this->lastSentAt->diffInSeconds(now()) < self::COOLDOWN_PERIOD) {
            $remainingTime = self::COOLDOWN_PERIOD - $this->lastSentAt->diffInSeconds(now());
            $remainingTime = (int) $remainingTime; // Cast to integer to remove decimal
            $this->alert('error', 'Vui lòng đợi ' . $remainingTime . ' giây trước khi gửi lại email.');
            return;
        }

        // Tạo token cho việc đặt lại mật khẩu
        $token = app('auth.password.broker')->createToken($user);
        $this->alert('success', 'Email đã được gửi. Vui lòng kiểm tra email của bạn.');

        // Gửi email tùy chỉnh
        Mail::to($this->email)->send(new ResetPasswordMail($token, $this->email));

        // Cập nhật thời gian gửi email
        $this->lastSentAt = now();
    }

    public function render()
    {
        return view('livewire.auth.forgot-password.form');
    }
}
