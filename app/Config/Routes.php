<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/vista', 'CLogeo::index');
$routes->post('/resultado', 'CLogeo::sum');
