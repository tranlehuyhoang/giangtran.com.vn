<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentHistory extends Model
{
    use HasFactory;

    protected $table = 'payment_history'; // Tên bảng

    protected $fillable = [
        'user_id',          // ID người dùng
        'transaction_code', // Mã giao dịch
        'amount',           // Số tiền
        'status',           // Trạng thái
        'bank',             // Ngân hàng
    ];

    // Định nghĩa quan hệ với model User
    public function user()
    {
        return $this->belongsTo(User::class); // Mối quan hệ một-nhiều với người dùng
    }
    public static function getPaymentHistoryByUser($userId)
    {
        return self::where('user_id', $userId)->orderBy('created_at', 'desc')->get();
    }
}