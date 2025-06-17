<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->group('', ['filter'=>'cifilter:auth'], static function (RouteCollection $routes) {
$routes->group('', ['filter'=>'cifilter:guest'], static function (RouteCollection $routes) {
    //라이브 카지노
    $routes->get('/casino_lobby', 'live\CasinoController::casino_lobby');
    //슬롯
    $routes->get('/slot_lobby', 'live\SlotController::slot_lobby');
    //미니게임
    $routes->get('/mini_lobby', 'live\MiniController::mini_lobby');

    $routes->group('/board',[],function(RouteCollection $routes){
        //도움 게시판
        $routes->get('/helper', 'board\BoardController::helper');
    });
});
