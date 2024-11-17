<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\QueryException;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'id',
        'bank_brand_name',
        'account_number',
        'transaction_date',
        'amount_out',
        'amount_in',
        'accumulated',
        'transaction_content',
        'reference_number',
        'code',
        'sub_account',
        'bank_account_id',
    ];

    public $incrementing = false; // ID không tự động tăng
    protected $keyType = 'string'; // Loại khóa chính

    public static function createUniqueTransaction(array $attributes)
    {
        // Kiểm tra xem ID đã tồn tại chưa
        if (self::where('id', $attributes['id'])->exists()) {
            return;
        }

        // Tạo giao dịch mới
        return self::create($attributes);
    }
    public static function fetchTransactionsFromApi()
    {
        $url = 'https://my.sepay.vn/userapi/transactions/list';
        $accountNumber = '104567890';
        $limit = 10;

        // Khởi tạo cURL
        $ch = curl_init();

        // Thiết lập các tùy chọn cho cURL
        curl_setopt($ch, CURLOPT_URL, $url . '?account_number=' . $accountNumber . '&limit=' . $limit);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer ZTAMVHYFPJWVYTNXQWXEMAP5IOBUADBMH079LUDYBQJQRZLHZTUI2TXS3LS8F8PL',
        ]);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        // Thực hiện yêu cầu cURL
        $response = curl_exec($ch);

        // Kiểm tra lỗi cURL
        if (curl_errno($ch)) {
            return;
        }

        // Đóng cURL
        curl_close($ch);

        // Giải mã phản hồi JSON
        $data = json_decode($response, true);

        // Kiểm tra nếu phản hồi thành công
        if (isset($data['status']) && $data['status'] === 200 && $data['messages']['success']) {
            $transactions = $data['transactions'] ?? [];

            foreach ($transactions as $transaction) {
                try {
                    Transaction::createUniqueTransaction($transaction);
                } catch (\Exception $e) {
                }
            }
        }
    }
}
