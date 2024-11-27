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

    public $captcha1, $captcha2, $captcha_answer, $captcha_answer_input, $new_password, $confirm_password;
    public function mount()
    {
        $this->generateCaptcha();

    }
    public function generateCaptcha()
    {
        $this->captcha1 = rand(min: 1, max: 100);
        $this->captcha2 = rand(min: 1, max: 100);
        $this->captcha_answer = $this->captcha1 + $this->captcha2;
    }
    public function changePassword()
    {
        if ($this->new_password !== $this->confirm_password) {
            $this->dispatch('showModalAlert', [
                'title' => 'Mật khẩu không khớp',
                'message' => 'Mật khẩu mới không khớp',
            ]);
            return;
        }
        if ($this->captcha_answer != $this->captcha_answer_input) {
            $this->dispatch('showModalAlert', [
                'title' => 'CAPTCHA không đúng',
                'message' => 'CAPTCHA không đúng',
            ]);
            return;
        }

        User::where('id', Auth::user()->id)->update([
            'password' => Hash::make($this->new_password),
        ]);
        $this->dispatch('showModalAlert', [
            'title' => 'Đổi mật khẩu thành công',
            'message' => 'Đổi mật khẩu thành công',
        ]);
        $this->reset(['new_password', 'confirm_password', 'captcha_answer_input']);
        // $this->generateCaptcha(); // Regenerate CAPTCHA after success
    }

    public function render()
    {
        return view('livewire.page.profile.form.reset-password');
    }
}
