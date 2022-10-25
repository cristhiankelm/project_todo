<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Mail\RegisterMail;
use App\Repositories\Contracts\MailAuthRepositoryInterface;
use App\Services\MailAuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthMailController extends Controller
{
    public function __construct(MailAuthService $service, MailAuthRepositoryInterface $model)
    {
        parent::__construct($service, $model);
    }

    public function sendRegisterMail()
    {
        $registerEmail = new RegisterMail();

        return $registerEmail;

//        Mail::to('criskp007@gmail.com')->send($registerEmail);
    }
}
