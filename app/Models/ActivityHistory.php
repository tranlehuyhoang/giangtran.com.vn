<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityHistory extends Model
{
    use HasFactory;

    // Định nghĩa bảng tương ứng (nếu tên bảng không theo quy tắc mặc định)
    protected $table = 'activity_history';

    // Các thuộc tính có thể gán đại trà
    protected $fillable = [
        'user_id',
        'content',
        'ip_address',
    ];

    // Quan hệ với model User (nếu cần)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public static function logActivity($content, $userId = null)
    {
        if (is_null($userId)) {
            $userId = Auth::user()->id;
        }

        // Nếu không có ipAddress, lấy từ request
        $ipAddress = request()->ip();

        // Tạo bản ghi lịch sử hoạt động
        $activity = self::create([
            'user_id' => $userId,
            'content' => $content,
            'ip_address' => $ipAddress,
        ]);

        // Kiểm tra số lượng hoạt động của người dùng
        $activityCount = self::where('user_id', $userId)->count();

        // Nếu số lượng hoạt động lớn hơn 100, xóa những bản ghi cũ
        if ($activityCount > 100) {
            self::where('user_id', $userId)
                ->orderBy('created_at', 'asc') // Sắp xếp theo thời gian tạo
                ->limit($activityCount - 100) // Giữ lại 100 bản ghi mới nhất
                ->delete();
        }

        return $activity;
    }
    public static function getActivitiesByUserId($userId = null)
    {
        if (is_null($userId)) {
            $userId = Auth::user()->id;
        }
        return self::where('user_id', $userId)->get();
    }
}
