<?php

require '../vendor/autoload.php';

use App\Helpers\ExceptionHandler;

set_exception_handler([ExceptionHandler::class, 'handle']);

$router = require '../src/Routes/index.php';