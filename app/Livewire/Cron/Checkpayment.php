<?php

namespace App\Livewire\Cron;

use App\Models\PaymentHistory;
use App\Models\Transaction;
use Livewire\Component;

class Checkpayment extends Component
{
    public function mount()
    {
        Transaction::fetchTransactionsFromApi();
        PaymentHistory::createPaymentHistory(); // Gọi hàm từ model
    }
    public function render()
    {
        return view('livewire.cron.checkpayment');
    }
}
