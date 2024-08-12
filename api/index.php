<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get the request URI
$request_uri = $_SERVER['REQUEST_URI'];

// Remove query string from the request URI
$request_uri = strtok($request_uri, '?');

// Route the request
switch ($request_uri) {
    case '/':
    case '/login':
        require __DIR__ . '/login.php';
        break;
    default:
        // 404 - Page not found
        header("HTTP/1.0 404 Not Found");
        echo '404 - Page not found';
        break;
}