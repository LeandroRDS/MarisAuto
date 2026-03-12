<?php 
    
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

include("includes/conexao.php");

$sql = "ALTER TABLE carros ADD usuario_id INT";

if(mysqli_query($conn, $sql)){
    echo "coluna criada com suceso";
}else{
    echo "Erro " . mysqli_error($conn);
}
?>
