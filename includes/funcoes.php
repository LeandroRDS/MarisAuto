<?php
require_once 'config.php';

function verificarLogin($conn, $usuario_id)
{
    if (isset($usuario_id)) {
        $usuarioLogado = true;

        $stmt = $conn->prepare("SELECT * FROM carros WHERE usuario_id=?");
        $stmt->bind_param("i", $rio_id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $carro = $resultado->fetch_assoc();
    }
}
