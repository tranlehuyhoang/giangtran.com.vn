<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SmmOrder extends Model
{
    use HasFactory;

    protected $table = 'smm_orders';

    protected $fillable = [
        'user_id',
        'smm_service_id',
        'quantity',
        'total_price',
        'status',
        'unit_price',
        'start_count',
        'link',
        'remains',
        'payment_method'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(SmmService::class, 'smm_service_id');
    }

    // Hàm tạo đơn hàng
    public static function createOrder($data)
    {
        // Xác thực dữ liệu
        $validator = Validator::make($data, [
            'user_id' => 'required|exists:users,id',
            'smm_service_id' => 'required|exists:smm_services,id',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0',
            'status' => 'required|string',
            'unit_price' => 'required|numeric|min:0',
            'start_count' => 'required|numeric|min:0',
            'link' => 'required|url',
            'remains' => 'required|integer|min:0',
        ]);

        if ($validator->fails()) {
            return [
                'status' => 'error',
                'message' => 'Có lỗi trong dữ liệu đầu vào: ' . implode(', ', $validator->errors()->all()),
            ];
        }

        // Tạo đơn hàng mới
        self::create([
            'user_id' => $data['user_id'],
            'smm_service_id' => $data['smm_service_id'],
            'quantity' => $data['quantity'],
            'total_price' => $data['total_price'],
            'status' => $data['status'],
            'unit_price' => $data['unit_price'],
            'start_count' => $data['start_count'],
            'link' => $data['link'],
            'remains' => $data['remains'],
            'payment_method' => $data['payment_method'],
        ]);

        return ['status' => 'success', 'message' => 'Đơn hàng đã được tạo thành công'];
    }
    public static function getOrdersByCurrentUser()
    {
        // Lấy người dùng đang đăng nhập
        $user = Auth::user();

        // Kiểm tra xem người dùng có tồn tại không
        if ($user) {
            // Truy vấn và trả về tất cả đơn hàng của người dùng
            return self::where('user_id', $user->id)->get();
        }

        return []; // Trả về mảng rỗng nếu không có người dùng đăng nhập
    }
}