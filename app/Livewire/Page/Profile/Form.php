<?php

namespace App\Livewire\Page\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Form extends Component
{
    use LivewireAlert;
    public $password, $new_password, $confirm_password;
    public function changePassword()
    {
        if ($this->new_password !== $this->confirm_password) {
            $this->alert('error', 'Mật khẩu mới không khớp');
            return;
        }
        User::where('id', Auth::user()->id)->update([
            'password' => Hash::make($this->new_password),
        ]);
        $this->alert('success', 'Đổi mật khẩu thành công');
    }
    public function render()
    {
        return view('livewire.page.profile.form');
    }
}
