<?php
namespace App\Repositories\User;

use App\Repositories\EloquentRepository;
use Illuminate\Support\Carbon;
use App\Repositories\User\UserRepositoryInterface;
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

    /**
     * Get 5 posts hot in a month the last
     * @return mixed
     */
    public function getUserHost()
    {
        return $this->_model::get();
    }

}
