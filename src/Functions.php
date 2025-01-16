<?php

namespace App;

class Functions {
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
}