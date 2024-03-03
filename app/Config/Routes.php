<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pages/home', 'Pages::index');
$routes->get('/pages/about', 'Pages::about');