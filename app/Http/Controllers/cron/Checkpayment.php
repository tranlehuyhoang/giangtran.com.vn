<?php

namespace App\Http\Controllers\cron;

use App\Http\Controllers\Controller;
use App\Models\PaymentHistory;
use Illuminate\Http\Request;

class Checkpayment extends Controller
{
    public function checkPayment()
    {
       $result = PaymentHistory::createPaymentHistory(); // Gọi hàm từ model
        return response()->json($result);
    }
}
