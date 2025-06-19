<?php

namespace App\Controllers\user;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

/**
 * 1. 유저정보 변경 비번 확인 페이지
 * 2. 유저 정보 변경 페이지
 * 3. 추천 내역 페이지
 * 4.
 */
class UserController extends BaseController
{
    // 1. 유저정보 변경 비번 확인 페이지
    public function editConfirm()
    {
        return view('backend/pages/user/editConfirm');
    }
    // 2. 유저 정보 변경 페이지
    public function info_edit()
    {
        return view('backend/pages/user/info_edit');
    }
    // 3. 추천 내역 페이지
    public function recommendList()
    {
        return view('backend/pages/user/recommend_list');
    }
    // 3. 추천 내역 페이지
    public function attendance()
    {
        return view('backend/pages/user/attendance');
    }
}
