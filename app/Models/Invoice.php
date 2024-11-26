<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Invoice extends Model
{
    use HasFactory;

    // Định nghĩa bảng tương ứng (nếu tên bảng không theo quy tắc mặc định)
    protected $table = 'invoices';

    // Các thuộc tính có thể gán đại trà
    protected $fillable = [
        'invoice_code',
        'invoice_type',
        'service',
        'invoice_date',
        'amount',
        'user_id',
        'payment_due_date',
        'payment_status',
    ];

    // Phương thức tạo hóa đơn mới
    public static function createInvoice(array $data)
    {
        // Xác thực dữ liệu
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

        // Tạo hóa đơn mới
        $invoice = self::create($data);

        return [
            'status' => 'success',
            'message' => 'Hóa đơn đã được tạo thành công',
            'invoice' => $invoice,
        ];
    }
    public static function getInvoicesByUser($userId = null)
    {
        if ($userId) {
            return self::where('user_id', $userId)->get();
        } else if (Auth::check()) {
            $user_id = Auth::user()->id;
            return self::where('user_id', $user_id)->get();
        } else {
            return collect();
        }
    }
}
