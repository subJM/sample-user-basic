<?php

namespace App\Controllers\live;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MiniController extends BaseController
{
    public function mini_lobby()
    {
        return view('backend/pages/live/mini_lobby');
    }
}
