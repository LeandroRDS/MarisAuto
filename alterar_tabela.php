<?php 
include("includes/conexao.php");

$sql = "ALERT TABLE carros ADD usuario_id INT";

if(mysqli_query($conn, $sql)){
    echo "coluna criada com suceso";
}else{
    echo "Erro " . mysqli_error($conn);
}
?>