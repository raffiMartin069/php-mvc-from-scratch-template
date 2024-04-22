<?php

// This class is for Cross-Origin Resource Sharing (CORS) configuration.
// It is used to configure the allowed origin, methods, and headers.
// This helps to prevent unauthorized access to the server.
// It provides a layer of security to the server.

class CORS {
    public static function AllowOrigin($allowedOrigins = []) {
        if (isset($_SERVER['HTTP_ORIGIN']) && in_array($_SERVER['HTTP_ORIGIN'], $allowedOrigins)) {
            header("Access-Control-Allow-Origin: " . $_SERVER['HTTP_ORIGIN']);
        }
    }

    public static function AllowMethods($methods = []) {
        if (is_array($methods)) {
            $methods = implode(", ", $methods);
        }
        header("Access-Control-Allow-Methods: " . $methods);
    }

    public static function AllowHeaders($headers = []) {
        if (is_array($headers)) {
            $headers = implode(", ", $headers);
        }
        header("Access-Control-Allow-Headers: " . $headers);
    }
}