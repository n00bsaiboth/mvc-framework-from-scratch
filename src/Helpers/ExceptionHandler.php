<?php

namespace App\Helpers;

use Throwable;

class ExceptionHandler {
    public static function handle(Throwable $exception): void {
        error_log($exception->getMessage());

        file_put_contents(
            __DIR__ . '../../../logs/errors.log',
            '[' . date('d-m-Y H:i:s') . '] ' . $exception->getMessage() . PHP_EOL,
            FILE_APPEND
        );

        if (php_sapi_name() === 'cli') {
            echo "An error occured: " . $exception->getMessage() . PHP_EOL;
        } else {
            http_response_code(500);
            echo "Sorry, something went wrong.";
        }
    }
}