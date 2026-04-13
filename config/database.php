<?php
use Dotenv\Dotenv; // nao sei pra que serve 

require_once __DIR__ . '/../vendor/autoload.php';//chamando a da pasta que estamso o vendor/autoload.php

$dontenv = Dotenv::createImmutable(__DIR__ . '/../'); //nao sei explicar o que faz

$host = $_SERVER['HTTP_HOST'];

if($host === 'localhost')
    {
        $conn = new mysqli(
        $_ENV['DB_HOST_LOCAL'],
        $_ENV['DB_USER_LOCAL'],
        $_ENV['DB_PASS_LOCAL'],
        $_ENV['DB_NAME_LOCAL']
        );
    }else{
        $conn = new mysqli(
        $_ENV['DB_HOST_PROD'],
        $_ENV['DB_USER_PROD'],
        $_ENV['DB_PASS_PROD'],
        $_ENV['DB_NAME_PROD']
        );
    }

    $conn->set_charset("utf8mb4");

    if($conn->connect_error){
        die("Error de conexão: ". $conn->connect_error);
    }
?>