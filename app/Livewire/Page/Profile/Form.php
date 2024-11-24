<?php

namespace App\Livewire\Page\Profile;

use App\Models\ActivityHistory;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Form extends Component
{
    public $device, $ipAddress;
    public $activities; // Thuộc tính để lưu trữ lịch sử hoạt động

    public function mount()
    {
        $this->device = $this->getDevice();
        $this->ipAddress = $this->getIpAddress();
        $this->loadActivities(); // Gọi phương thức để tải lịch sử hoạt động
    }
    public function getIpAddress()
    {
        return request()->ip();
    }
    public function getDevice()
    {
        return request()->header('User-Agent');
    }
    public function loadActivities()
    {
        // Lấy tất cả hoạt động của người dùng hiện tại
        $this->activities = ActivityHistory::getActivitiesByUserId(Auth::id());
    }

    public function render()
    {
        return view('livewire.page.profile.form');
    }
}
