<?php
require_once __DIR__ . '/../../config/database.php'; //chamando databese de onde ele estiver.

class AuthController{
    public function login(){
        require_once  __DIR__ .'/../views/login.php';
    }

    public function autenticar(){
        global $conn;
            
        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';

        $stmt = $conn->prepare("SELECT * FROM usuario WHERE emeail = ?");
        $stmt->bli
    }

}




?>