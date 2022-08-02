<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\TaskRepositoryInterface;
use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct(TaskService $service, TaskRepositoryInterface $model)
    {
        parent::__construct($service, $model);
    }
}
