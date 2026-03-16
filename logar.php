<?php 

    session_start();
    include("includes/conexao.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE 
    email=?");
    $stmt->bind_param("s",$email);
    $stmt->execute();

    $resultado = $stmt->get_result();    
    $usuario = $resultado->fetch_assoc();

    if($usuario && password_verify($senha, $usuario['senha'])){
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_name'] = $usuario['usuario'];

        header("location: painel.php");
    }else{
        echo "Login invalido";
    }
?>