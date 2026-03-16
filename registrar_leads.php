<?php
include("includes/conexao.php");

$vendedor = $_GET['vendedor'];
$carro = $_GET['carro'];

$sql = "INSERT INTO leads (vendedor_id,carro_id,data)
VALUES ('$vendedor','$carro',NOW())";

mysqli_query($conn,$sql);
?>