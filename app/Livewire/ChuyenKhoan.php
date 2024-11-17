<?php

namespace App\Livewire;

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
        Transaction::fetchTransactionsFromApi();
        $this->createPaymentHistory();
        $this->loadPaymentHistory();
    }
    protected function loadPaymentHistory()
    {
        $userId = auth()->id(); // Lấy ID người dùng hiện tại
        $this->paymentHistories = PaymentHistory::getPaymentHistoryByUser($userId);
    }
    protected function createPaymentHistory()
    {
        // Lấy tất cả các giao dịch
        $transactions = Transaction::all();

        foreach ($transactions as $transaction) {
            // Kiểm tra xem transaction_code đã tồn tại trong bảng PaymentHistory chưa
            $exists = PaymentHistory::where('transaction_code', $transaction->id)->exists();

            if (!$exists) {
                // Lưu lịch sử nạp tiền
                PaymentHistory::create([
                    'user_id' => auth()->id(), // ID người dùng hiện tại
                    'transaction_code' => $transaction->id, // Sử dụng mã giao dịch
                    'amount' => $transaction->amount_in, // Số tiền nạp (đảm bảo sử dụng đúng trường)
                    'status' => $transaction->status ?? 'thành công', // Trạng thái, có thể điều chỉnh theo yêu cầu
                    'bank' => $transaction->bank_brand_name, // Tên ngân hàng từ giao dịch
                ]);
            }  
        }
    }
    public function render()
    {
        return view('livewire.chuyen-khoan');
    }
}
