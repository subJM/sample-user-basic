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
    });
    $routes->group('money', [], static function (RouteCollection $routes) {
        $routes->get('recharge', 'money\MoneyController::recharge');
        $routes->get('cash', 'money\MoneyController::cash');
        $routes->get('cash2', 'money\MoneyController::cash2');
    });
    $routes->group('events', [], static function (RouteCollection $routes) {
        $routes->get('coupon', 'events\CouponController::coupon_lobby');
    });
    $routes->group('user', [], static function (RouteCollection $routes) {
        $routes->get('info_edit', 'user\UserController::info_edit');
    });
});
