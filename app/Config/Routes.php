<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test', 'Stuff\\Test::index');
$routes->get('/test/what', 'Stuff\\Test::what');
$routes->get('/snippets', 'SnippetController::index');
$routes->post('/snippets', 'SnippetController::submit');
