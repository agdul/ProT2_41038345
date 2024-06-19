<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('index','Home::index');
$routes->get('login','Home::login');
$routes->get('registrate','Home::registrate');
$routes->get('acerca_de','Home::acerca_de');
$routes->get('quienes_somos','Home::quienes_somos');
$routes->get('productos','Home::productos');