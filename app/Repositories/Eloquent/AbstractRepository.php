<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\MainRepositoryInterface;

class AbstractRepository implements MainRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    protected function resolveModel()
    {
        return app($this->model);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function save(array $data)
    {
        return $this->model->fill($data)->save();
    }

    public function create(array $data)
    {
        return $this->model->create($data)->id;
    }

    public function findById(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function update(array $data)
    {
        return $this->model->where('id', $this->findById($data['id'])->id)->update($data);
    }

    public function delete(int $id)
    {
        return $this->model::findOrFail($id)->delete();
    }

    public function count()
    {
        return $this->model->count();
    }
}
