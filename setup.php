<?php 

include("include/conexao.php");

echo "conectato<br>";

$sql = "CREATE TABLE IF NOT EXISTS
usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
)";

if(mysqli_query($conn, $sql)){
    echo "tabela criada";
}else{
    echo mysqli_error($conn);
}

?>