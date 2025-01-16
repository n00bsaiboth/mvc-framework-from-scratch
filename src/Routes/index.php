<?php

use App\Controllers\HomeController;
use App\Controllers\SandboxController;
use App\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/sandbox', SandboxController::class, 'sandbox');

$router->dispatch();
