<?php

namespace App\Controllers\board;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BoardController extends BaseController
{
    public function helper()
    {
        return view('backend/pages/board/helper');
    }
}
