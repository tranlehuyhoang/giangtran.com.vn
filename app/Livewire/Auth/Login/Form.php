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
    public function login()
    {
        // Đăng nhập người dùng
        if (Auth::attempt(['username' => $this->username, 'password' => $this->password], $this->remember)) {
            // Đăng nhập thành công
            ActivityHistory::logActivity('Đăng nhập bằng tài khoản');
            $this->dispatch('showModalAlert', [
                'title' => 'Đăng nhập thành công!',
                'message' => 'Chúc bạn có những trải nghiệm tuyệt vời!',
            ]);
            return redirect('/'); // Chuyển hướng đến trang dashboard hoặc trang bạn muốn
        } else {
            // Đăng nhập không thành công
            $this->dispatch('showModalAlert', [
                'title' => 'Đăng nhập thất bại!',
                'message' => 'Tên tài khoản hoặc mật khẩu không chính xác.',
            ]);
        }
    }
    public function render()
    {
        return view('livewire.auth.login.form');
    }
}
