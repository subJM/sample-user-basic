<?php

namespace App\Controllers\events;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CouponController extends BaseController
{
    public function coupon_lobby()
    {
        return view('backend/pages/events/coupon');
    }
}
