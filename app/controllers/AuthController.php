<?php
require_once __DIR__ . '/../../config/database.php'; //chamando databese de onde ele estiver.

class AuthController{
    public function login(){
        require_once  __DIR__ .'/../views/login.php';
    }

    
}


?>