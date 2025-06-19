<?php

namespace App\Controllers\board;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BettingController extends BaseController
{
    public function betting_lobby()
    {
        return view('backend/pages/board/betting');
    }
    public function bettingResult()
    {
        return view('backend/pages/board/betting_result');
    }
}
