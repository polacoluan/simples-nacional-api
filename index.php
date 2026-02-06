<?php

require_once "./Core/functions.php";

// Basic CORS handling for local frontend development.
$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
if ($origin === 'http://localhost:3000') {
    header('Access-Control-Allow-Origin: ' . $origin);
    header('Vary: Origin');
}
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'OPTIONS') {
    http_response_code(204);
    exit;
}

spl_autoload_register(
    fn($class) =>  require base_path(str_replace("\\", DIRECTORY_SEPARATOR, $class) . ".php")
);

session_start();



require "routes.php";
