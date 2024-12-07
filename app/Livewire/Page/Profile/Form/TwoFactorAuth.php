<?php
namespace App\Livewire\Page\Profile\Form;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert; // Thêm import
use Illuminate\Support\Facades\Auth;

class TwoFactorAuth extends Component
{
    use LivewireAlert; // Sử dụng trait LivewireAlert

    public $twoFactorAuthStatus;

    public function mount()
    {
        // Lấy trạng thái 2FA từ người dùng hiện tại
        $this->twoFactorAuthStatus = Auth::user()->two_factor_auth_status ?? false;
    }

    public function updateTwoFactorAuth()
    {
        // Cập nhật trạng thái 2FA cho người dùng
        $user = Auth::user();
        $user->two_factor_auth_status = $this->twoFactorAuthStatus;
        $user->save();

        // Hiển thị thông báo thành công
        $this->alert('success', 'Trạng thái xác thực hai yếu tố đã được cập nhật.');
    }

    public function render()
    {
        return view('livewire.page.profile.form.two-factor-auth');
    }
}
