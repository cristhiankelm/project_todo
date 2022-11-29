<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Services\UserService;

class UserController extends Controller
{
    public function __construct(UserService $service, UserRepositoryInterface $model)
    {
        parent::__construct($service, $model);
    }
}
