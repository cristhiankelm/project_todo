<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
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
        $categories = $this->model->all();
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

    public function edit($id)
    {
        $task = $this->model->findById($id);

        $categories = $this->model->all();
        $data['categories'] = $categories;
        $data['task'] = $task;

        return view('tasks.edit', $data);
    }

    public function update(StoreTask $request, $id)
    {
        $data = $request->validated();
        $data['id'] = $id;
        $data['is_done'] = $request->is_done ? true : false;

        $this->service->updateTask($data);

        return to_route('home');
    }

    public function destroy($id)
    {
        $this->model->delete($id);
        return to_route('home');
    }
}
