<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/moodBoard', 'Users::moodBoard');
$routes->get('/roadMap', 'Users::roadMap');
$routes->get('/login', 'Auth::login');
$routes->get('/signup', 'Auth::signup');
$routes->get('/admin/dashboard', 'Admin::dashboard');

