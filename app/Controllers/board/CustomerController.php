<?php

namespace App\Controllers\board;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CustomerController extends BaseController
{
    public function customer_center()
    {
        return view('backend/pages/board/customer_center');
    }
    public function customer_write()
    {
        return view('backend/pages/board/customer_write');
    }
}
