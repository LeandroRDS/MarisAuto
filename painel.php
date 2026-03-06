<?php 
session_start();

if(!isset($_SESSION['usuario_id'])){
    header("location: login.php");
    exit;
}

echo "Bem Vindo" . $_SESSION['usuario_nome'];
?>