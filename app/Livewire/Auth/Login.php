<?php

namespace App\Livewire\Auth;

use App\Models\ActivityHistory;
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
                ActivityHistory::logActivity('Đăng nhập bằng Google');
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
                $this->dispatch('showModalAlert', [
                    'title' => 'Đăng ký thành công với Google!',
                    'message' => 'Chúc bạn có những trải nghiệm tuyệt vời!',
                ]);
                ActivityHistory::logActivity('Đăng nhập bằng Google');
                return redirect('/');
            }
        } catch (\Exception $e) {
            // Hiển thị thông báo lỗi nếu có sự cố
            $this->dispatch('showModalAlert', [
                'title' => 'Đã có lỗi xảy ra hoặc bạn đã từ chối quyền truy cập ứng dụng.',
                'message' => 'Đã có lỗi xảy ra hoặc bạn đã từ chối quyền truy cập ứng dụng.',
            ]);

            return redirect('/'); // Quay về trang chính
        }
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
