<?php
namespace App\Livewire\Auth\Login;

use App\Models\ActivityHistory;
use App\Models\User;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Form extends Component
{
    use LivewireAlert; // Kích hoạt Livewire Alert

    public $username;
    public $password;
    public $remember = false;
    public $errors = [];
    public $otp ,$opt_status;
    public $userId; // Thêm biến để lưu ID người dùng

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

        // Kiểm tra mật khẩu
        if (Hash::check($this->password, $user->password)) {
            // Mật khẩu chính xác, kiểm tra trạng thái 2FA
            if ($user->two_factor_auth_status) {
                // Gửi email chứa mã OTP
                $this->sendOtpEmail($user);
                $this->userId = $user->id; // Lưu ID người dùng vào phiên
                return; // Ngừng lại để yêu cầu nhập OTP
            }

            // Nếu không có 2FA, thực hiện đăng nhập
            Auth::login($user, $this->remember);
            ActivityHistory::logActivity('Đăng nhập bằng tài khoản');
            return redirect('/'); // Chuyển hướng đến trang bạn muốn
        } else {
            // Đăng nhập không thành công
            $this->errors['password'] = 'Mật khẩu không chính xác.';
            $this->alert('error', 'Mật khẩu không chính xác.');
        }
    }

    private function sendOtpEmail($user)
    {
        // Tạo và gửi mã OTP qua email
        $otp = rand(100000, 999999); // Tạo mã OTP
        $user->update(['otp' => $otp]); // Lưu mã OTP vào cơ sở dữ liệu
        // \Mail::to($user->email)->send(new \App\Mail\OtpMail($otp)); // Gửi email
        $this->opt_status = true; // Lưu mã OTP vào biến
        $this->alert('info', 'Mã OTP đã được gửi đến email của bạn.');
    }

    public function verifyOtp()
    {
        // Kiểm tra mã OTP
        $user = User::find($this->userId); // Lấy lại người dùng từ ID đã lưu

        if ($this->otp == $user->otp) {
            // Đăng nhập thành công
            Auth::login($user, $this->remember); // Thực hiện đăng nhập
            ActivityHistory::logActivity('Đăng nhập thành công với OTP');
            return redirect('/'); // Chuyển hướng đến trang bạn muốn
        } else {
            $this->alert('error', 'Mã OTP không chính xác.');
        }
    }

    public function render()
    {
        return view('livewire.auth.login.form');
    }
}
