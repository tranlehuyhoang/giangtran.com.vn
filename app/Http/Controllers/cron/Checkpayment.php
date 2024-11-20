<?php

namespace App\Http\Controllers\cron;

use App\Http\Controllers\Controller;
use App\Models\PaymentHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Checkpayment extends Controller
{
    public function checkPayment()
    {
        $code = 'NF '.  strtoupper(string: Auth::user()->name);
        $userId = Auth::user()->id;
        // Gọi hàm từ model và truyền user_id
        $result = PaymentHistory::createPaymentHistory($code, $userId);
        return response()->json($result);
    }
}
