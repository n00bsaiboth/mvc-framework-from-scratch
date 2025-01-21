<?php

use App\Controllers\AboutController;
use App\Controllers\ContactController;
use App\Controllers\HomeController;
use App\Controllers\NewsController;
use App\Controllers\SandboxController;
use App\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->post('/feedback', HomeController::class, 'feedback');

$router->get('/about', AboutController::class, 'about');

$router->get('/news', NewsController::class, 'news');
$router->get('/news/:id', NewsController::class, 'single');

$router->get('/contact', ContactController::class, 'contact');

// sandbox for testing purposes
$router->get('/sandbox', SandboxController::class, 'sandbox');

$router->dispatch();
