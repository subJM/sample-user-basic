<?php

namespace App\Controllers\events;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PromotionController extends BaseController
{
    public function promotion_lobby()
    {
        return view('backend/pages/events/promotion');
    }
}

