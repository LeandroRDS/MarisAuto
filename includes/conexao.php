<?php
$host = "sql100.infinityfree.com";
$user = "if0_40632939";
$pass = "Lrdsamdsjcpr123";
$bd = "if0_40632939_bd_anuncios";

$conn = new mysqli($host, $user, $pass, $bd);

if($conn->connect_error){
    die("erro na conexãoo" . $conn->connect_error);
}
 //echo "conectado com sucesso"
?>