<?php

namespace App\Livewire\Page\Profile\Form;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class ChangeInfo extends Component
{
    public $device, $ipAddress, $contact;
    public function mount()
    {
        $this->contact = Auth::user()->contact;
        $this->device = $this->getDevice();
        $this->ipAddress = $this->getIpAddress();
    }
    public function getIpAddress()
    {
        return request()->ip();
    }
    public function getDevice()
    {
        return request()->header('User-Agent');
    }
    public function saveProfile()
    {

        $user = User::where('id', Auth::id())->update([
            'contact' => $this->contact,
        ]);
        if ($user) {
            $this->dispatch('showModalAlert', [
                'title' => 'Thành Công',
                'message' => 'Thông Tin Đã Được Lưu',
            ]);
        }
    }
    public function render()
    {
        return view('livewire.page.profile.form.change-info');
    }
}
