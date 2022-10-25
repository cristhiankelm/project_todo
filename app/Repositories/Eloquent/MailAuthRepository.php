<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\MailAuthRepositoryInterface;
use Illuminate\Support\Facades\Mail;

class MailAuthRepository extends AbstractRepository implements MailAuthRepositoryInterface
{
    public function __construct()
    {
        $this->model = Mail::class;
        parent::__construct();
    }
}
