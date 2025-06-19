<?php

namespace App\Controllers\board;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class NoticeController extends BaseController
{
    public function notice_lobby()
    {
        return view('backend/pages/board/notice');
    }
}
