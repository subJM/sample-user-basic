<?php

namespace App\Controllers\live;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SlotController extends BaseController
{
    public function slot_lobby()
    {
        return view('backend/pages/live/slot_lobby');
    }
}
