<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/projects', 'Projects::index');
$routes->get('/experience', 'Experience::index');

// 404 Override
$routes->set404Override('Home::error404');

