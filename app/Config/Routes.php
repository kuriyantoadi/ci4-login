<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// jika ingin otomatis controller terbaca langsung
// $routes->setAutoRoute(true);

// pindahkan default controller
// kondisi awal
// $routes->get('/', 'Home::index');

// Setelah di edit
$routes->get('/', 'Login::index');

// Manual Routes
// format (pemanggilan_link, controller, function)

// halaman user
$routes->get('/User', 'User::index');

// halaman user
$routes->get('/Admin', 'Admin::index');

// routes login
$routes->get('/', 'Login::index');
$routes->get('/Login', 'Login::index');
$routes->get('/Login/logout', 'Login::logout');
$routes->get('/Login/login_action', 'Login::login_action');
$routes->post('/Login/login_action', 'Login::login_action');

