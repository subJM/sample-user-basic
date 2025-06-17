<?php

namespace App\Controllers\live;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CasinoController extends BaseController
{
    public function casino_lobby()
    {
        return view('backend/pages/live/casino_lobby');
    }
}
