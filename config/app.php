<?php
//define a data e hora
date_default_timezone_set('America/Sao_Paulo'); 

//verificnado se o estatos da sessao é igal ao nome no php
if(session_status() === PHP_SESSION_NONE){  

    // se for ingal inicia a sessao
    session_start();
}


if($_SERVER['HTTP_HOST'] === 'localhost'){
    define()
}

?>