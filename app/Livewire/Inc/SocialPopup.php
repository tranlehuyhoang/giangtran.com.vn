<?php

namespace App\Livewire\Inc;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SocialPopup extends Component
{
    use LivewireAlert;

    public function googleLogin($response)
    {
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
                return redirect('/home');
            } else {
                // Tạo người dùng mới nếu không tồn tại
                $newUser = User::create([
                    'username' => $this->generateUniqueUsername(),
                    'name' => $userData['name'],
                    'email' => $userData['email'],
                    'picture' => $userData['picture'],
                    'password' => Hash::make(uniqid()), // Mật khẩu ngẫu nhiên
                ]);

                // Đăng nhập người dùng mới
                Auth::login($newUser);

                sleep(1);
                return redirect('/home');
            }
        } catch (\Exception $e) {
            // Hiển thị thông báo lỗi nếu có sự cố
            $this->alert(
                'error',
                'Đã có lỗi xảy ra hoặc bạn đã từ chối quyền truy cập ứng dụng.',
            );

            return redirect('/'); // Quay về trang chính
        }
    }
    function generateUniqueUsername($length = 10)
    {
        do {
            $username = strtolower(Str::random($length)); // Chuyển đổi thành chữ thường
        } while (User::where('username', $username)->exists());

        return $username;
    }

    public function render()
    {
        return view('livewire.inc.social-popup');
    }
}
