<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'DespesasController::index');
$routes->get('/despesas', 'DespesasController::index');
$routes->get('/despesas/create', 'DespesasController::create');
$routes->post('/despesas/store', 'DespesasController::store');
$routes->get('/despesas/edit/(\d+)', 'DespesasController::edit/$1');
$routes->post('/despesas/update/(\d+)', 'DespesasController::update/$1');
$routes->get('/despesas/delete/(\d+)', 'DespesasController::delete/$1');