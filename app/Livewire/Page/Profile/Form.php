<?php

namespace App\Livewire\Page\Profile;

use App\Models\ActivityHistory;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Form extends Component
{

    public $activities; // Thuộc tính để lưu trữ lịch sử hoạt động

    public function mount()
    {

        $this->loadActivities(); // Gọi phương thức để tải lịch sử hoạt động
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
