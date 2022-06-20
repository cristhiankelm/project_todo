<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\MainRepositoryInterface;
use App\Services\AbstractService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $service;
    protected $model;

    public function __construct(AbstractService $service, MainRepositoryInterface $model)
    {
        $this->service = $service;
        $this->model = $model;
    }
}
