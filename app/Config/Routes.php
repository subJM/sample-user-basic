<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->group('', ['filter'=>'cifilter:auth'], static function (RouteCollection $routes) {
$routes->group('', ['filter'=>'cifilter:guest'], static function (RouteCollection $routes) {
    $routes->get('/casino_lobby', 'live\CasinoController::casino_lobby');
    $routes->get('/slot_lobby', 'live\SlotController::slot_lobby');
});
