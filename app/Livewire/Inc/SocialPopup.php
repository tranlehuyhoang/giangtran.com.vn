<?php

namespace App\Livewire\Inc;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SocialPopup extends Component
{
    use LivewireAlert;

    public function googleLogin($response)
    {
        $response = [
            'name' => 'web developer',
            'email' => '2509roblox@gmail.com',
            'picture' => 'https://lh3.googleusercontent.com/a/ACg8ocK8gM4BqM7T5N6j_ITi302_WurD0O8FM4ui8JJGNxNbwKM3cyjt=s96-c',
        ];
        // Kiểm tra và lấy thông tin người dùng từ phản hồi
        try {
            // Thay vì gọi Socialite, bạn đã có phản hồi từ Google
            $userData = [
                'name' => $response['name'],
                'email' => $response['email'],
                'picture' => $response['picture'],
            ];

            // Tìm kiếm người dùng trong cơ sở dữ liệu
            $findUser = User::where('email', $userData['email'])->first();

            if ($findUser) {
                // Đăng nhập người dùng nếu đã tồn tại
                Auth::login($findUser);
                $this->alert('success', 'Đăng nhập thành công!', [
                    'timer' => 3000,
                    'toast' => true,
                ]);
                return redirect('/home');
            } else {
                // Tạo người dùng mới nếu không tồn tại
                $newUser = User::create([
                    'name' => $userData['name'],
                    'email' => $userData['email'],
                    'picture' => $userData['picture'],
                    'password' => Hash::make(uniqid()), // Mật khẩu ngẫu nhiên
                ]);

                // Đăng nhập người dùng mới
                Auth::login($newUser);

                // Hiện thông báo thành công
                $this->alert('success', 'Đăng nhập thành công!', [
                    'timer' => 3000,
                    'toast' => true,
                ]);

                return redirect('/home');
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
        return view('livewire.inc.social-popup');
    }
}
