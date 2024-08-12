<?php
$host = $_ENV['DB_HOST'] ?? 'localhost';   // Fallback values can be provided if needed
$user = $_ENV['DB_USER'] ?? 'root';
$pass = $_ENV['DB_PASSWORD'] ?? '';
$db   = $_ENV['DB_NAME'] ?? 'test';
$port = 26663; // Aiven often uses non-standard ports, make sure this is correct

// Debug logging
error_log("DB_HOST: " . $host);
error_log("DB_USER: " . $user);
error_log("DB_NAME: " . $db);
// Don't log the password

if (!$host || !$user || !$pass || !$db) {
    die("Database configuration is incomplete. Please check environment variables.");
}

try {
    $conn = new mysqli($host, $user, $pass, $db, $port);
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    error_log("Database connection successful");
} catch (Exception $e) {
    error_log("Database connection error: " . $e->getMessage());
    die("We're experiencing technical difficulties. Please try again later.");
}