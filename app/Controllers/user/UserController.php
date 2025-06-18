<?php

namespace App\Controllers\user;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function info_edit()
    {
        return view('backend/pages/user/info');
    }
}
