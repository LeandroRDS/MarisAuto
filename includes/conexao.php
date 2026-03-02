<?php
$host = "sql100.infinityfree.com";
$user = "if0_40632939";
$pass = "Lrdsamdsjcpr123";
$bd = "if0_40632939_XXX";

$conn = new mysqli($host, $user, $pass, $bd11);

if($conn->connect_error){
    die("erro na conexãoo");
}

?>