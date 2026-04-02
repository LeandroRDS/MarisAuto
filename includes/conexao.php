<?php

use Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    $conn = new mysqli(
        $_ENV['DB_HOST_LOCAL'],
        $_ENV['DB_USER_LOCAL'],
        $_ENV['DB_PASS_LOCAL'],
        $_ENV['DB_NAME_LOCAL']
    );
    $conn->set_charset("utf8mb4");
} else {
    $conn = new mysqli(
        $_ENV['DB_HOST_PROD'],
        $_ENV['DB_USER_PROD'],
        $_ENV['DB_PASS_PROD'],
        $_ENV['DB_NAME_PROD']
    );
    $conn->set_charset("utf8mb4");
}

if($conn->connect_error){
    die("Erro de conexção: " . $conn->connect_error);
}