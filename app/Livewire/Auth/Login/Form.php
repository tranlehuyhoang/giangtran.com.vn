<?php

namespace App\Livewire\Auth\Login;
use App\Models\ActivityHistory;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class Form extends Component
{
    use LivewireAlert; // Kích hoạt Livewire Alert

    public $username;
    public $password;
    public $remember = false;
    public $captcha;
    public $errors = [];


    public function login()
    {
        // Reset lỗi trước khi thực hiện đăng nhập
        $this->errors = [];

        // Kiểm tra xem tên tài khoản hoặc email có trống không
        if (empty($this->username)) {
            $this->errors['username'] = 'Vui lòng nhập tên tài khoản hoặc email.';
            $this->alert('error', 'Vui lòng nhập tên tài khoản hoặc email.');
            return;
        }

        // Kiểm tra xem mật khẩu có trống không
        if (empty($this->password)) {
            $this->errors['password'] = 'Vui lòng nhập mật khẩu.';
            $this->alert('error', 'Vui lòng nhập mật khẩu.');
            return;
        }

        // Kiểm tra xem tài khoản có tồn tại không
        $user = User::where('username', $this->username)
                    ->orWhere('email', $this->username)
                    ->first();

        if (!$user) {
            $this->errors['username'] = 'Tài khoản không tồn tại.';
            $this->alert('error', 'Tài khoản không tồn tại.');
            return;
        }

        // Đăng nhập người dùng
        if (Auth::attempt(['username' => $user->username, 'password' => $this->password], $this->remember) ||
            Auth::attempt(['email' => $user->email, 'password' => $this->password], $this->remember)) {
            // Đăng nhập thành công
            ActivityHistory::logActivity('Đăng nhập bằng tài khoản');
            return redirect('/'); // Chuyển hướng đến trang dashboard hoặc trang bạn muốn
        } else {
            // Đăng nhập không thành công
            $this->errors['password'] = 'Mật khẩu không chính xác.';
            $this->alert('error', 'Mật khẩu không chính xác.');
        }
    }

    public function render()
    {
        return view('livewire.auth.login.form');
    }
}
