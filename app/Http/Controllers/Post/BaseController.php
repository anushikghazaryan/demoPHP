<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Services\Post\Service;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service) {
        $this->service = $service;
    }
}
