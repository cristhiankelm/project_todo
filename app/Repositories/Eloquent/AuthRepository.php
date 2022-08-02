<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Contracts\AuthRepositoryInterface;

class AuthRepository extends AbstractRepository implements AuthRepositoryInterface
{
    public function __construct()
    {
        $this->model = User::class;
        parent::__construct();
    }
}
