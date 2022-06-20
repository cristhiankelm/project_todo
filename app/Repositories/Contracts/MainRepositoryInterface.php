<?php

namespace App\Repositories\Contracts;

interface MainRepositoryInterface
{
    public function all();
    public function findById(int $id);
    public function save(array $data);
    public function create(array $data);
    public function update(array $data);
    public function delete(int $id);
    public function count();
}
