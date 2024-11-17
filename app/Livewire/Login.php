<?php

namespace App\Livewire;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class Login extends Component
{
    use LivewireAlert; // Kích hoạt Livewire Alert

    public $username;
    public $password;
    public $remember = false;
    public $captcha;

    public function login()
    {
        // Đăng nhập người dùng
        if (Auth::attempt(['username' => $this->username, 'password' => $this->password], $this->remember)) {
            // Đăng nhập thành công
            $this->alert('success', 'Đăng nhập thành công!');
            return redirect('/'); // Chuyển hướng đến trang dashboard hoặc trang bạn muốn
        } else {
            // Đăng nhập không thành công
            $this->alert('error', 'Tên tài khoản hoặc mật khẩu không chính xác.');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}