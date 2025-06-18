<?php

namespace App\Controllers\money;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MoneyController extends BaseController
{
    public function recharge()
    {
        return view('backend/pages/money/recharge');
    }
    public function cash()
    {
        return view('backend/pages/money/cash');
    }
    public function cash2()
    {
        return view('backend/pages/money/cash2');
    }
}
