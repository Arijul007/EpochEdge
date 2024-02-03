<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

function db_connect() {
    try {
        $conn = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);
        
        // Check the connection
        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    } catch (Exception $e) {
        // Handle connection error
        die("Connection failed: " . $e->getMessage());
    }
}

function db_close($conn) {
    try {
        // Close the database connection
        $conn->close();
    } catch (Exception $e) {
        // Handle closing error
        die("Error while closing connection: " . $e->getMessage());
    }
}
?>
