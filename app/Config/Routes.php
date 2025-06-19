<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->group('', ['filter'=>'cifilter:auth'], static function (RouteCollection $routes) {
$routes->group('', ['filter'=>'cifilter:guest'], static function (RouteCollection $routes) {
    // 라이브 카지노
    $routes->get('casino_lobby', 'live\CasinoController::casino_lobby');
    // 슬롯
    $routes->get('slot_lobby', 'live\SlotController::slot_lobby');
    // 미니게임
    $routes->get('mini_lobby', 'live\MiniController::mini_lobby');
 
    $routes->group('board', [], static function (RouteCollection $routes) {
        $routes->get('helper', 'board\BoardController::helper');
        $routes->get('message', 'board\MessageController::message_lobby');
        $routes->get('notice', 'board\NoticeController::notice_lobby');
        $routes->get('betting', 'board\BettingController::betting_lobby');
        $routes->get('betting_result', 'board\BettingController::bettingResult');
        $routes->get('customer_center', 'board\CustomerController::customer_center');
        $routes->get('customer_write', 'board\CustomerController::customer_write');
    });
    $routes->group('money', [], static function (RouteCollection $routes) {
        $routes->get('recharge', 'money\MoneyController::recharge');
        $routes->get('cash', 'money\MoneyController::cash');
        $routes->get('cash2', 'money\MoneyController::cash2');
    });
    $routes->group('events', [], static function (RouteCollection $routes) {
        $routes->get('coupon', 'events\CouponController::coupon_lobby');
        $routes->get('promotion', 'events\PromotionController::promotion_lobby');
    });
    $routes->group('user', [], static function (RouteCollection $routes) {
        $routes->get('editConfirm', 'user\UserController::editConfirm');
        $routes->get('info_edit', 'user\UserController::info_edit');
        $routes->get('recommend_list', 'user\UserController::recommendList');
        $routes->get('attendance', 'user\UserController::attendance');
    });
    $routes->group('modal', [], static function (RouteCollection $routes) {
        $routes->get('coin_deposit', 'modal\CoinController::coinDaposit');
        $routes->get('showCoinModal', 'modal\CoinController::showCoinModal');
    });
});
