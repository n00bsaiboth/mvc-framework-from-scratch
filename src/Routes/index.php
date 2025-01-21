<?php

use App\Controllers\AboutController;
use App\Controllers\HomeController;
use App\Controllers\NewsController;
use App\Controllers\SandboxController;
use App\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->post('/feedback', HomeController::class, 'feedback');
$router->post('/post', HomeController::class, 'post');
$router->get('/form', HomeController::class, 'form');
$router->get('/test', HomeController::class, 'test');


$router->get('/about', AboutController::class, 'about');

$router->get('/news', NewsController::class, 'news');
$router->get('/news/:id', NewsController::class, 'single');

// sandbox for testing purposes
$router->get('/sandbox', SandboxController::class, 'sandbox');

$router->dispatch();
