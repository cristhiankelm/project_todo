<?php

namespace App\Repositories\Eloquent;

use App\Models\Task;
use App\Repositories\Contracts\TaskRepositoryInterface;

class TaskRepository extends AbstractRepository implements TaskRepositoryInterface
{
    public function __construct()
    {
        $this->model = Task::class;
        parent::__construct();
    }
}
