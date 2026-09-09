<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('homepage', 'Home::homepage');
$routes->get('homepage/(:segment)', 'Home::hm/$1');