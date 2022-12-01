<?php

namespace App\Services;

use App\Repositories\Contracts\AuthRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class AuthService extends AbstractService
{
    public function __construct(AuthRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public function makeUser(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return $this->repository->save($data);
    }
}
