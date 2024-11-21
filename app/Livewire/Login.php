<?php

namespace App\Livewire;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('email', $user->email)->first();

            if ($findUser) {
                // Đăng nhập người dùng nếu email được tìm thấy trong cơ sở dữ liệu
                Auth::login($findUser);
                return redirect('/');
            } else {
                // Tạo người dùng mới nếu email không được tìm thấy
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => Hash::make(uniqid()), // Tạo mật khẩu ngẫu nhiên
                ]);

                // Đăng nhập người dùng mới
                Auth::login($newUser);

                // Hiện thông báo thành công
                $this->alert('success', 'Đăng ký thành công với Google!', [
                    'timer' => 3000,
                    'toast' => true,
                ]);

                return redirect('/');
            }
        } catch (\Exception $e) {
            // Hiển thị thông báo lỗi nếu có sự cố
            $this->alert('error', 'Đã có lỗi xảy ra hoặc bạn đã từ chối quyền truy cập ứng dụng.', [
                'timer' => 3000,
                'toast' => true,
            ]);

            return redirect('/'); // Quay về trang chính
        }
    }
    public function render()
    {
        return view('livewire.login');
    }
}
