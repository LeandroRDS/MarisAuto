<?php

if($_SERVER['SERVER_NAME'] == "localhost"){

    $conn = new mysqli("localhost","root","","marisauto_1");

}else{

    $conn = new mysqli(
        "sql312.infinityfree.com",
        "if0_40632939",
        "Lrdsamdsjcpr123",
        "if0_40632939_bd_anuncios"
    );

}

if($conn->connect_error){
    die("Erro de conexão: " . $conn->connect_error);
}

?>