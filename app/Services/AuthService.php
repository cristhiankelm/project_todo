<?php

namespace App\Services;

use App\Repositories\Contracts\AuthRepositoryInterface;

class AuthService extends AbstractService
{
    public function __construct(AuthRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public function makeUser(array $data)
    {
        return $this->repository->save($data);
    }
}
