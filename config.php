<?php
date_default_timezone_set('America/Sao_Paulo');

if (session_start() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'includes/conexao.php';
require_once 'includes/funcoes.php';
?>