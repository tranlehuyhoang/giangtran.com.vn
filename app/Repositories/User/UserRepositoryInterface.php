<?php
namespace App\Repositories\User;

use App\Repositories\RepositoryInterface;

interface UserRepositoryInterface extends RepositoryInterface
{
    public function findByEmail(string $email);
    public function createUser(array $data);
    public function getCurrentUserBalance();
    public function getCurrentUserName();
}
