<?php

namespace App\Livewire\Auth;

use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\User; 
use Illuminate\Support\Facades\Hash; 

class Register extends Component
{
    use LivewireAlert;

    public $name;
    public $email;
    public $username;
    public $password;
    public $captcha;
    public $captchaResult;
    public $agree_terms = false;
    public $num1;
    public $num2;

    public function mount()
    {
        // Tạo hai số ngẫu nhiên từ 1 đến 10
        $this->num1 = rand(1, 10);
        $this->num2 = rand(1, 10);
        $this->captchaResult = $this->num1 + $this->num2; // Tổng của hai số
    }

    public function register()
    {
        // Kiểm tra xem các input có trống hay không
        if (empty($this->name) || empty($this->email) || empty($this->username) || empty($this->password) || !$this->agree_terms) {
            $this->alert('error', 'Vui lòng điền đầy đủ thông tin.');
            return;
        }

        // Kiểm tra CAPTCHA
        if ($this->captcha != $this->captchaResult) {
            $this->alert('error', 'Kết quả xác minh không chính xác.');
            return;
        }

        // Kiểm tra xem tài khoản đã tồn tại hay chưa
        if (User::where('email', $this->email)->exists() || User::where('username', $this->username)->exists()) {
            $this->alert('error', 'Tài khoản đã tồn tại với email hoặc tên đăng nhập này.');
            return;
        }

        // Lưu dữ liệu vào cơ sở dữ liệu
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'username' => $this->username,
            'password' => Hash::make($this->password), 
        ]);

        // Hiển thị thông báo thành công
        $this->alert('success', 'Đăng ký thành công!');

        // Reset form sau khi thành công
        $this->reset(['name', 'email', 'username', 'password', 'captcha', 'agree_terms']);
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}