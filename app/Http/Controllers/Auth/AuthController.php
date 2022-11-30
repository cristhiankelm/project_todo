<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginUser;
use App\Http\Requests\Auth\RegisterUser;
use App\Models\User;
use App\Repositories\Contracts\AuthRepositoryInterface;
use App\Services\AuthService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class AuthController extends Controller
{
    public function __construct(AuthService $service, AuthRepositoryInterface $model)
    {
        parent::__construct($service, $model);
    }

    public function index(Request $request)
    {
        dd(Auth::user());
        return view('auth.login');
    }

    public function loginAction(LoginUser $request)
    {
        $data = $request->validated();

        if (Auth::attempt($data)) {
            return to_route('home');
        };
    }

    public function register(Request $request)
    {
        return view('auth.register');
    }

    public function registerAction(RegisterUser $request)
    {
        $data = $request->validated();

        $this->service->makeUser($data);

        return to_route('login');
    }
}
