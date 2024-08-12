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
        require __DIR__ . '/api/login.php';
        break;
    case '/dash':
        require __DIR__ . '/api/dash.php';
        break;
    case '/userdash':
        require __DIR__ . '/api/userdash.php';
        break;
    case '/updatevehicle':
        require __DIR__ . '/api/updatevehicle.php';
        break;
    case '/addvehicle':
        require __DIR__ . '/api/addvehicle.php';
        break;
    case '/loginProcess':
        require __DIR__ . '/api/loginProcess.php';
        break;
    case '/co':
        require __DIR__ . '/api/co.php';
        break;
    default:
        // 404 - Page not found
        header("HTTP/1.0 404 Not Found");
        echo '404 - Page not found';
        break;
}