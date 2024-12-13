<?php

namespace App\Http\Controllers\cron;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\PaymentHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Checkpayment extends Controller
{
    public function checkPayment()
    {
        $code = 'HG '.  strtoupper(string: Auth::user()->username);
        $userId = Auth::user()->id;
        // Gọi hàm từ model và truyền user_id
        $result = PaymentHistory::createPaymentHistory($code, $userId);
        return response()->json($result);
    }
    public function checkInvoice($invoice_code)
    {
        $invoice = Invoice::where('invoice_code', $invoice_code)
            ->where('payment_status', 'pending')
            ->first();
        if ($invoice) {
            $userId = $invoice->user_id;
            $result = Invoice::updateInvoicePayment($invoice_code, $userId);
            return response()->json($result);
        }
        return response()->json(['status' => 'error', 'message' => 'Hóa đơn không tồn tại hoặc đã thanh toán']);
    }
}
