<?php

namespace App\Services;

use App\Repositories\Contracts\TaskRepositoryInterface;

class TaskService extends AbstractService
{
    public function __construct(TaskRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public function makeTask(array $data)
    {
        return $this->repository->save($data);
    }

    public function updateTask(array $data)
    {
        $data['id'] = $this->repository->findById($data['id'])->id;
        return $this->repository->update($data);
    }
}
