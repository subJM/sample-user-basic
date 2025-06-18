<?php

namespace App\Controllers\board;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MessageController extends BaseController
{
    public function message_lobby()
    {
        return view('backend/pages/board/message');
    }
}
