<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmmService extends Model
{
    use HasFactory;

    protected $table = 'smm_services'; // Tên bảng

    protected $fillable = [
        'smmcategory_id', // ID danh mục SMM
        'name',           // Tên dịch vụ
        'price',          // Giá dịch vụ
        'is_active',      // Trạng thái hoạt động
        'time',           // Thời gian
        'min',            // Số lượng tối thiểu
        'max',            // Số lượng tối đa
        'old_price',            // Số lượng tối đa
    ];

    // Định nghĩa quan hệ với SmmCategory
    public function category()
    {
        return $this->belongsTo(SmmCategory::class, 'smmcategory_id');
    }
}
