<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/customers', 'Customers::index');
$routes->get('/users', 'Users::index');
$routes->addRedirect('/homepage', '/');
$routes->addRedirect('/homepage/(:any)', '/');
$routes->addRedirect('/var/www/html/public/index.php/public', '/');
$routes->addRedirect('/var/www/html/public/index.php/public/(:any)', '/$1');
