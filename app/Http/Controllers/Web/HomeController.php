<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct(UserService $service, UserRepositoryInterface $model)
    {
        parent::__construct($service, $model);
    }

    public function index(Request $request)
    {
        $tasks = Task::all()->take(4);

        $authUser = Auth::user();

        return view('home', compact('tasks', 'authUser'));
    }
}
