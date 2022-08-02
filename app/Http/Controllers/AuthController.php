<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\AuthRepositoryInterface;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(AuthService $service, AuthRepositoryInterface $model)
    {
        parent::__construct($service, $model);
    }

    public function index()
    {
        return view('layouts.login');
    }
}
