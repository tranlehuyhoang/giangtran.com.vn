<?php

namespace App\Livewire\Inc;

use App\Repositories\User\UserRepositoryInterface;
use Livewire\Component;

class SidebarWrapper extends Component
{
    public $balance;
    public $name;
    protected $userRepository;

    public function mount(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository; // Inject repository
        $this->balance = $this->userRepository->getCurrentUserBalance(); // Lấy số dư người dùng
        $this->name = $this->userRepository->getCurrentUserName(); // Lấy tên người dùng
    }
    public function render()
    {
        return view('livewire.inc.sidebar-wrapper');
    }
}
