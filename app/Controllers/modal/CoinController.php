<?php

namespace App\Controllers\modal;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CoinController extends BaseController
{
    //모달창 검증 후 반환
    public function coinDaposit()
    {
        return $this->response->setJSON([
                'status' => true,
                'url' => base_url('/modal/showCoinModal')
            ]);
    }

    //모달창 띄우기
    public function showCoinModal(){
        return view('backend/modal/coin_deposit');
    }

    
}
