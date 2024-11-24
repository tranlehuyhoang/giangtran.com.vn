<?php

namespace App\Livewire\Page;

use App\Events\MessageSent;
use App\Models\PaymentHistory;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert; // Thêm import này
use App\Models\Transaction; // Đảm bảo import model Transaction
use Illuminate\Support\Facades\Log; // Đảm bảo import Log

class ChuyenKhoan extends Component
{
    use LivewireAlert; // Kích hoạt Livewire Alert
    public $paymentHistories;

    public function mount()
    {
        $this->loadPaymentHistory();
    }
    protected function loadPaymentHistory()
    {
        $userId = auth()->id(); // Lấy ID người dùng hiện tại
        $this->paymentHistories = PaymentHistory::getPaymentHistoryByUser($userId) ?? [];
    }


    public function render()
    {
        return view('livewire.page.chuyen-khoan');
    }
}
