<?php

namespace App\Livewire\Inc;

use App\Repositories\User\UserRepositoryInterface; // Thêm dòng này
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Header extends Component
{
    use LivewireAlert;

    public $title;
    public $description;
    public $balance; // Thêm thuộc tính để lưu số dư
    public $name; // Thêm thuộc tính để lưu tên người dùng
    protected $userRepository;

    public function mount(UserRepositoryInterface $userRepository, $title = null, $description = null)
    {
        $this->userRepository = $userRepository; // Inject repository
        $this->title = $title ?? 'Trang Khách Hàng';
        $this->description = $description ?? 'Trang khách hàng';
        $this->balance = $this->userRepository->getCurrentUserBalance(); // Lấy số dư người dùng
        $this->name = $this->userRepository->getCurrentUserName(); // Lấy tên người dùng
    }

    public function render()
    {
        return view('livewire.inc.header', [
        ]);
    }

    public function showModalLogout()
    {
        $this->dispatch('showModalLogout');
    }
}
