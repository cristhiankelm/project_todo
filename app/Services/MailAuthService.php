<?php

namespace App\Services;

use App\Repositories\Contracts\MailAuthRepositoryInterface;

class MailAuthService extends AbstractService
{
    public function __construct(MailAuthRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }


}
