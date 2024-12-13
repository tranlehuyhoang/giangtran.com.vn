<?php

namespace App\Livewire\Inc;

use App\Repositories\Invoice\InvoiceRepositoryInterface;
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
    protected $invoiceRepository;
    public $countInvoices;
    public function mount(UserRepositoryInterface $userRepository, InvoiceRepositoryInterface $invoiceRepository, $title = null, $description = null)
    {
        $this->userRepository = $userRepository; // Inject repository
        $this->invoiceRepository = $invoiceRepository;
        $this->title = $title ?? 'Trang Khách Hàng';
        $this->description = $description ?? 'Trang khách hàng';
        $this->balance = $this->userRepository->getCurrentUserBalance(); // Lấy số dư người dùng
        $this->name = $this->userRepository->getCurrentUserName(); // Lấy tên người dùng
        $this->countInvoices = $this->invoiceRepository->countInvoicesByUser();
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
