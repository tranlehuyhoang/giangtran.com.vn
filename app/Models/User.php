<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'name',
        'username',
        'email',
        'contact',
        'balance',
        'password',
        'ip_address',
        'other_contact_info',
        'device',
        'total_consumption',
        'total_deposit',
        'two_factor_auth_status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Lấy số dư của người dùng hiện tại.
     *
     * @return float|int|null
     */
    public static function getCurrentUserBalance()
    {
        // Lấy người dùng đang đăng nhập
        $user = auth()->user();

        // Kiểm tra xem người dùng có tồn tại không
        return $user ? $user->balance : 0;
    }

    /**
     * Lấy tên của người dùng hiện tại.
     *
     * @return string|null
     */
    public static function getCurrentUserName()
    {
        // Lấy người dùng đang đăng nhập
        $user = auth()->user();

        // Kiểm tra xem người dùng có tồn tại không
        return $user ? $user->name : 'Khách';
    }
}
