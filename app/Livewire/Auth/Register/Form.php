<?php

namespace App\Livewire\Auth\Register;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Form extends Component
{
    use LivewireAlert;

    public $name;
    public $email;
    public $username;
    public $password;
    public $agree_terms = false;
    public $errors = [];
    public function mount()
    {

    }

    public function register()
    {
        $this->errors = []; // Reset lỗi



        if (empty($this->name)) {
            $this->errors['name'] = 'Họ và tên là bắt buộc.';
        } elseif (!preg_match('/^[a-zA-Z0-9]{6,20}$/', $this->name)) {
            $this->errors['name'] = 'Họ và tên phải từ 6 tới 20 ký tự và chỉ chứa chữ cái và số.';
        }

        if (empty($this->email)) {
            $this->errors['email'] = 'Email là bắt buộc.';
        } elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = 'Email không hợp lệ.';
        }

        if (empty($this->username)) {
            $this->errors['username'] = 'Tên tài khoản là bắt buộc.';
        } elseif (strlen($this->username) < 6 || strlen($this->username) > 20) {
            $this->errors['username'] = 'Tên tài khoản phải từ 6 đến 20 ký tự.';
        } elseif (!preg_match('/^[a-zA-Z0-9]+$/', $this->username)) {
            $this->errors['username'] = 'Tên tài khoản chỉ được chứa chữ cái và số.';
        }

        if (empty($this->password)) {
            $this->errors['password'] = 'Mật khẩu là bắt buộc.';
        } elseif (strlen($this->password) < 6 || strlen($this->password) > 20) {
            $this->errors['password'] = 'Mật khẩu phải từ 8 đến 20 ký tự.';
        }
        if (!$this->agree_terms) {
            $this->errors['agree_terms'] = 'Bạn phải đồng ý với điều khoản.';
        }

        if (!empty($this->errors)) {
            $this->alert('error', 'Vui lòng kiểm tra lại thông tin.');
            return;
        }

        // Kiểm tra xem tài khoản đã tồn tại hay chưa
        if (User::where('email', $this->email)->exists() || User::where('username', $this->username)->exists()) {
            $this->errors['account'] = 'Tài khoản đã tồn tại với email hoặc tên đăng nhập này.';
            $this->alert('error', 'Tài khoản đã tồn tại với email hoặc tên đăng nhập này.');
            return;
        }

        $today = now()->startOfDay();
        $countByIp = User::where('ip_address', request()->ip())
            ->whereDate('created_at', $today)
            ->count();
        if ($countByIp >= 2) {
            $this->alert('error', 'Bạn đã đăng ký quá số lần cho phép trong một ngày với địa chỉ IP này.');
            return;
        }
        // Lưu dữ liệu vào cơ sở dữ liệu, bao gồm địa chỉ IP và thông tin thiết bị
        try {
            // Lưu dữ liệu vào cơ sở dữ liệu
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'username' => $this->username,
                'password' => Hash::make($this->password),
                'ip_address' => request()->ip(), // Lưu địa chỉ IP
                'device' => request()->header('User-Agent'), // Lưu thông tin thiết bị
            ]);

            $this->alert('success', 'Đăng ký thành công!');
            $this->reset(['name', 'email', 'username', 'password', 'agree_terms']);
        } catch (\Exception $e) {
            // Nếu có lỗi xảy ra, hiển thị thông báo lỗi
            $this->alert('error', 'Đăng ký thất bại: ' . $e->getMessage());
            // Bạn có thể ghi log lỗi nếu cần
            \Log::error('Registration error: ' . $e->getMessage());
        }
    }
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function render()
    {
        return view('livewire.auth.register.form');
    }
}
