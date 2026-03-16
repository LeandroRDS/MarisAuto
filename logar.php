<?php 

    session_start();
    include("includes/conexao.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE 
    email='$email'";
    $resultado = mysqli_query($conn, $sql);

    $usuario = mysqli_fetch_assoc($resultado);

    if($usuario && password_verify($senha, $usuario['senha'])){
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_name'] = $usuario['usuario'];

        header("location: painel.php");
    }else{
        echo "Login invalido";
    }
?>