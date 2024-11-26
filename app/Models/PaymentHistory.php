<?php
namespace App\Models;

use App\Events\MessageSent;
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
        if($userId){
            return self::where('user_id', $userId)->orderBy('created_at', 'desc')->get();
        }
        return null;
    }
    public static function createPaymentHistory($code, $user_id)
    {
        // Lấy tất cả các giao dịch
        $transactions = Transaction::all();

        foreach ($transactions as $transaction) {
            // Kiểm tra xem transaction_content có chứa mã code không
            if (strpos($transaction->transaction_content, $code) !== false) {
                // Kiểm tra xem transaction_code đã tồn tại trong bảng PaymentHistory chưa
                $exists = self::where('transaction_code', $transaction->id)->exists();

                if (!$exists) {
                    self::create([
                        'user_id' => $user_id, // Sử dụng user_id được truyền vào
                        'transaction_code' => $transaction->id, // Sử dụng mã giao dịch
                        'amount' => $transaction->amount_in, // Số tiền nạp
                        'status' => $transaction->status ?? 'thành công', // Trạng thái
                        'bank' => $transaction->bank_brand_name, // Tên ngân hàng
                    ]);
                    $user = User::find($user_id); // Giả sử bạn có mô hình User
                    $user->balance += $transaction->amount_in; // Cộng số tiền vào balance
                    $user->save(); // Lưu thay đổi
                    return ['status' => 'success', 'amount' => $transaction->amount_in, 'code'=> $code, 'user' =>$user_id];
                }
            }
        }
        // return ['status' => 'success', 'amount' => $transaction->amount_in, 'code'=> $code, 'user' =>$user_id];
        return ['status' => 'not_found', 'amount' => null,  'code'=> $code, 'user' =>$user_id];
    }


}
