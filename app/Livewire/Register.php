<?php

namespace App\Livewire;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\User; // Import model User
use Illuminate\Support\Facades\Hash; // Import Hash để mã hóa mật khẩu
use Illuminate\Validation\ValidationException; // Import ValidationException

class Register extends Component
{
    use LivewireAlert;

    public $name;
    public $email;
    public $username;
    public $password;
    public $agree_terms = false;

    public function register()
    {
        // Xác thực dữ liệu đầu vào
     
        // Lưu dữ liệu vào cơ sở dữ liệu
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'username' => $this->username,
            'password' => Hash::make($this->password), // Mã hóa mật khẩu
        ]);

        // Hiển thị thông báo thành công
        $this->alert('success', 'Đăng ký thành công!');

        // Reset form sau khi thành công
        $this->reset(['name', 'email', 'username', 'password', 'agree_terms']);
    }

    public function render()
    {
        return view('livewire.register')->layout('components.layouts.auth');
    }
}