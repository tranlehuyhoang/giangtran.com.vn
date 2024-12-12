<?php

namespace App\Livewire\Auth;

use App\Models\ActivityHistory;
use App\Models\User;
use App\Repositories\User\UserEloquentRepository;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Login extends Component
{
    public $userRepository;
    // public function mount(UserEloquentRepository $userRepository)
    // {
    //     $this->userRepository = $userRepository;
    //     dd($this->userRepository->getUserHost());
    // }


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
                    'username' => $this->generateUniqueUsername(),
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
    function generateUniqueUsername($length = 10)
    {
        do {
            $username = strtolower(Str::random($length)); // Chuyển đổi thành chữ thường
        } while (User::where('username', $username)->exists());

        return $username;
    }

    #[Layout('components.layouts.auth')]

    public function render()
    {
        return view('livewire.auth.login');
    }
}
