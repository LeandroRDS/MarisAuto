<?php
if(session_start() === PHP_SESSION_NONE){
    session_start();
}
require_once 'includes/conexao.php';

function verificarLogin($conn, $usuario_id)
{
    if (isset($_SESSION['usuario_id'])) {
        $usuarioLogado = true;

        $stmt = $conn->prepare("SELECT * FROM carros WHERE usuario_id=?");
        $stmt->bind_param("i", $usuario_id);
        $stmt->execute();
        $resultado = $stmt->get_result();
       
    } else {
        $usuarioLogado = false;

        $stmt = $conn->prepare("SELECT * FROM carros WHERE usuario_id=?");
        $stmt->bind_param("i", $usuario_id);
        $stmt->execute();
        $resultado = $stmt->get_result();
       
    }

    if ($usuarioLogado) {
        $href = ("logout.php");
        $status = ("Sair");
        $add_anuncio = ("cadastrar_carro.php");
    } else {
        $href = ("login.php");
        $status = ("Logar");
        $add_anuncio = ("login.php");
    }

    return (object)[
        "resultado" => $resultado,
        "href" => $href,
        "status" => $status,
        "add_anuncio" => $add_anuncio,
        "usuarioLogado" => $usuarioLogado

    ];
}
