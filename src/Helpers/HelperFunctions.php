<?php

namespace App\Helpers;

class HelperFunctions {
    public static function validateInput($data) {
        $data = trim($data);
        $data = htmlentities($data);
        $data = stripslashes($data);

        return $data;
    }

    public static function validateInt(int $data): int {
        $data = self::validateInput($data);
        
        $data = filter_var($data, FILTER_SANITIZE_NUMBER_INT);
        $data = filter_var($data, FILTER_VALIDATE_INT);

        return $data;
    }

    public static function validateString($data): string {
        $data = self::validateInput($data);

        $data = (string) $data;
        
        $data = filter_var($data, FILTER_SANITIZE_STRING);
        $data = filter_var($data, FILTER_FLAG_EMPTY_STRING_NULL);

        return $data;
    }

    public static function validateEmail($data): string {
        $data = self::validateString($data);

        $data = filter_var($data, FILTER_SANITIZE_EMAIL);
        $data = filter_var($data, FILTER_VALIDATE_EMAIL);

        return $data;
    }

    public static function validateUrl($data): string {
        $data = self::validateString($data);

        $data = filter_var($data, FILTER_SANITIZE_URL);
        $data = filter_var($data, FILTER_VALIDATE_URL);


        return $data;
    }

    public static function redirect(string $data) {
        header("Location: {$data}");
    }
}