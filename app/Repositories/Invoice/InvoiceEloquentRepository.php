<?php

namespace App\Repositories\Invoice;

use App\Models\Transaction;
use App\Repositories\EloquentRepository;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class InvoiceEloquentRepository extends EloquentRepository implements InvoiceRepositoryInterface
{
    /**
     * Get model
     * @return string
     */
    public function getModel()
    {
        return Invoice::class;
    }

    public function createInvoice(array $data)
    {
        // Validate data
        $validator = Validator::make($data, [
            'invoice_code' => 'required|unique:invoices,invoice_code',
            'invoice_type' => 'required|string',
            'service' => 'required|string',
            'invoice_date' => 'required|date',
            'amount' => 'required|numeric|min:0',
            'payment_due_date' => 'required|date|after:invoice_date',
        ]);

        if ($validator->fails()) {
            return [
                'status' => 'error',
                'message' => 'Có lỗi trong dữ liệu đầu vào: ' . implode(', ', $validator->errors()->all()),
            ];
        }

        // Create new invoice
        $invoice = Invoice::create($data);

        return [
            'status' => 'success',
            'message' => 'Hóa đơn đã được tạo thành công',
            'invoice' => $invoice,
        ];
    }

    public function getInvoicesByUser($userId = null)
    {
        if ($userId) {
            return Invoice::where('user_id', $userId)->get();
        } elseif (Auth::check()) {
            return Invoice::where('user_id', Auth::user()->id)->get();
        } else {
            return collect();
        }
    }
    public function countInvoicesByUser($userId = null)
    {
        if ($userId) {
            return Invoice::where('user_id', $userId)->count();
        } elseif (Auth::check()) {
            return Invoice::where('user_id', Auth::user()->id)->count();
        }
        return 0; // Return 0 if no user is provided and not authenticated
    }
    public function hasUnpaidInvoices($userId = null)
    {
        if ($userId) {
            return Invoice::where('user_id', $userId)
                ->where('payment_status', 'pending') // Assuming 'pending' means unpaid
                ->exists();
        } elseif (Auth::check()) {
            return Invoice::where('user_id', Auth::user()->id)
                ->where('payment_status', 'pending')
                ->exists();
        }
        return false;
    }

    public function updateInvoicePayment($invoice_code, $user_id)
    {
        $transactions = Transaction::all();

        foreach ($transactions as $transaction) {
            if (strpos($transaction->transaction_content, $invoice_code) !== false) {
                $invoice = Invoice::where('invoice_code', $invoice_code)->first();
                if ($invoice) {
                    $invoice->payment_status = 'paid';
                    $invoice->save();
                    return ['status' => 'success', 'code'=> $invoice_code, 'user' => $user_id];
                }
            }
        }
        return ['status' => 'error', 'message' => 'Invoice not found or already paid.'];
    }

    public function removeInvoice($invoice_code)
    {
        $user_id = Auth::user()->id;
        if (Invoice::where('invoice_code', $invoice_code)->where('user_id', $user_id)->exists()) {
            Invoice::where('invoice_code', $invoice_code)->delete();
            return ['status' => 'success', 'message' => 'Hóa đơn đã được xóa thành công'];
        } else {
            return ['status' => 'error', 'message' => 'Hóa đơn không tồn tại'];
        }
    }
}
