<?php
require_once 'config.php';

function verificarLogin($conn, $usuario_id)
{
    if (isset($usuario_id)) {
        $usuarioLogado = true;

        $stmt = $conn->prepare("SELECT * FROM carros WHERE usuario_id=?");
        $stmt->bind_param("i", $usuario_id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $carro = $resultado->fetch_assoc();
    } else {
        $usuarioLogado = false;

        $stmt = $conn->prepare("SELECT * FROM carros WHERE usuario_id=?");
        $stmt->bind_param("i", $usuario_id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $carro = $resultado->fetch_assoc();
    }

    if ($usuarioLogado) {
        $href = ("logout.php");
        $status = ("Sair");
        $add_anuncio = ("cadastrar_carro.php");
    } else {
        $href = ("login.php");
        $status = ("Logar");
    }

    return (object)[
        "carro" => $carro,
        "href" => $href,
        "status" => $status,
        "add_anuncio" => $add_anuncio

    ];
}
