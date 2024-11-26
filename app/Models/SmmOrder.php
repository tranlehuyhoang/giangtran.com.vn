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
        'payment_method',
        'payment_status',
        'order_code'
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
            'payment_method' => 'required|string', // Thêm kiểm tra cho payment_method nếu cần
        ]);

        if ($validator->fails()) {
            return [
                'status' => 'error',
                'message' => 'Có lỗi trong dữ liệu đầu vào: ' . implode(', ', $validator->errors()->all()),
            ];
        }

        // Lấy người dùng
        $user = User::find($data['user_id']);

        // Kiểm tra số dư của người dùng chỉ nếu payment_method khác bank_transfer
        if ($data['payment_method'] !== 'bank_transfer') {
            if ($user->balance < $data['total_price']) {
                return [
                    'status' => 'error',
                    'message' => 'Số dư không đủ để thực hiện giao dịch.',
                ];
            }

            // Trừ tiền từ tài khoản của người dùng
            $user->balance -= $data['total_price'];
            $user->save();
        }

        // Tạo order_code ngẫu nhiên 6 chữ số không trùng lặp
        do {
            $orderCode = random_int(100000, 999999);
        } while (self::where('order_code', $orderCode)->exists());

        // Thiết lập payment_status
        $paymentStatus = ($data['payment_method'] === 'bank_transfer') ? 'pending' : 'paid';

        // Tạo đơn hàng mới
        $order = self::create([
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
            'order_code' => $orderCode, // Thêm order_code vào đơn hàng
            'payment_status' => $paymentStatus, // Thêm payment_status vào đơn hàng
        ]);
        if ($order && $order->payment_method == 'bank_transfer') {
            $data = [
                'invoice_code' => $order->order_code,
                'invoice_type' => 'Đăng Ký Dịch Vụ',
                'service' => $order->service->name,
                'amount' => $order->total_price,
                'invoice_date' => now(),
                'user_id' => $order->user_id,
                'payment_due_date' => now()->addMinutes(3),
                'payment_status' => 'pending',
            ];
            $invoice = Invoice::createInvoice($data);

            return ['status' => $invoice['status'], 'message' => $invoice['message'] , 'payment_status' => $paymentStatus , 'order' => $order , 'order_code' => $order->order_code];
        } else  {
            return ['status' => 'success', 'message' => 'Đơn hàng đã được tạo thành công'];

        }
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
