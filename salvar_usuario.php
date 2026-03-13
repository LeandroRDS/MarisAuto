<?php 
include("includes/conexao.php");

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios
(usuario, email, senha)
VALUES ('$usuario','$email','$senha')";

mysqli_query($conn, $sql);
header("location: login.php");
?>