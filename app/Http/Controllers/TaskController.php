<?php

namespace App\Http\Controllers;

use App\Http\Requests\Task\StoreTask;
use App\Repositories\Contracts\TaskRepositoryInterface;
use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct(TaskService $service, TaskRepositoryInterface $model)
    {
        $this->taskRepository = app()->make(TaskRepositoryInterface::class);
        parent::__construct($service, $model);
    }

    public function index()
    {

    }

    public function create(Request $request)
    {
        $categories = $this->taskRepository->all();

        $data['categories'] = $categories;

        return view('tasks.create', $data);
    }

    public function store(StoreTask $request)
    {
        $data = $request->validated();
        $data['user_id'] = 1;

        $this->service->makeTask($data);

        return to_route('task.create');
    }

    public function edit(Request $request)
    {
        return view('tasks.edit');
    }

    public function delete(Request $request)
    {

    }
}
