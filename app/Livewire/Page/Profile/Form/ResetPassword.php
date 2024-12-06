<?php

namespace App\Livewire\Page\Profile\Form;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ResetPassword extends Component
{
    use LivewireAlert;


    public $old_password;       // Thêm biến cho mật khẩu cũ
    public $new_password;       // Mật khẩu mới
    public $confirm_password;   // Nhập lại mật khẩu mới
    public $errors = [];        // Mảng để lưu lỗi
    public function mount()
    {
    }

    public function changePassword()
    {
        // Reset lỗi trước khi thực hiện kiểm tra
        $this->errors = [];

        // Kiểm tra mật khẩu cũ
        if (empty($this->old_password)) {
            $this->errors['old_password'] = 'Vui lòng nhập mật khẩu cũ.';
        }

        // Kiểm tra mật khẩu mới
        if (empty($this->new_password)) {
            $this->errors['new_password'] = 'Vui lòng nhập mật khẩu mới.';
        }

        // Kiểm tra nhập lại mật khẩu
        if (empty($this->confirm_password)) {
            $this->errors['confirm_password'] = 'Vui lòng nhập lại mật khẩu mới.';
        }

        // Kiểm tra mật khẩu mới và xác nhận mật khẩu mới có khớp không
        if ($this->new_password !== $this->confirm_password) {
            $this->errors['confirm_password'] = 'Mật khẩu mới và mật khẩu xác nhận không khớp.';
        }

        // Kiểm tra mật khẩu cũ có chính xác không
        $user = auth()->user(); // Lấy người dùng hiện tại
        if (!Hash::check($this->old_password, $user->password)) {
            $this->errors['old_password'] = 'Mật khẩu cũ không chính xác.';
        }

        // Nếu không có lỗi, tiến hành thay đổi mật khẩu
        if (empty($this->errors)) {
            $user->password = Hash::make($this->new_password);
            $user->save();

            $this->alert('success', 'Mật khẩu đã được thay đổi thành công!');
            return redirect()->route('home'); // Chuyển hướng đến trang bạn muốn
        }
    }


    public function render()
    {
        return view('livewire.page.profile.form.reset-password');
    }
}
