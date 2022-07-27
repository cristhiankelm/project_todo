<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(UserService $service, UserRepositoryInterface $model)
    {
        parent::__construct($service, $model);
    }
}
