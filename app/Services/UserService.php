<?php

namespace App\Services;

use App\Repositories\Contracts\MainRepositoryInterface;

class UserService extends AbstractService
{
    public function __construct(MainRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }


}
