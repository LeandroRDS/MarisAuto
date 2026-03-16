<?php 

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

session_start();

if(!isset($_SESSION['usuario_id'])){
    header("location: login.php");
    exit;
}

header("location: perfil.php")  
?>