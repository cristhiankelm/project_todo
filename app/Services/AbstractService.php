<?php

namespace App\Services;

use App\Repositories\Contracts\MainRepositoryInterface;

class AbstractService
{
    protected $repository;

    public function __construct(MainRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
