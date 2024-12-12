<?php
namespace App\Repositories\User;

use App\Repositories\EloquentRepository;
use Illuminate\Support\Carbon;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserEloquentRepository extends EloquentRepository implements UserRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\User::class;
    }


    public function findByEmail(string $email)
    {
        return $this->_model::where('email', $email)->first(); // Tìm người dùng theo email
    }



    public function createUser(array $data)
    {
        $data['password'] = Hash::make(uniqid()); // Tạo mật khẩu ngẫu nhiên
        $data['username'] = $this->generateUniqueUsername(); // Gọi hàm để tạo username duy nhất

        return $this->_model::create($data); // Tạo người dùng mới
    }




    function generateUniqueUsername($length = 10)
    {
        do {
            $username = strtolower(Str::random($length)); // Chuyển đổi thành chữ thường
        } while ($this->_model::where('username', $username)->exists());

        return $username;
    }
    public function getCurrentUserBalance()
    {
        // Lấy người dùng đang đăng nhập
        $user = auth()->user();

        // Kiểm tra xem người dùng có tồn tại không
        return $user ? $user->balance : 0;
    }
    public function getCurrentUserName()
    {
        // Lấy người dùng đang đăng nhập
        $user = auth()->user();

        // Kiểm tra xem người dùng có tồn tại không
        return $user ? $user->name : 'Khách';
    }
}
