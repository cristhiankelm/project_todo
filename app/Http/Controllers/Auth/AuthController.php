<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\AuthRepositoryInterface;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function __construct(AuthService $service, AuthRepositoryInterface $model)
    {
        parent::__construct($service, $model);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }
}
