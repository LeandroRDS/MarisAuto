<?php 
    
 error_reporting(E_ALL);
 ini_set('display_errors', 1);

include("includes/conexao.php");

echo "conectato<br>";

$sql = "CREATE TABLE IF NOT EXISTS
usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
)";

if(mysqli_query($conn, $sql)){
    echo "tabela usuarios criada";
}else{
    echo "$sql . erro ao criar tabela ou tabela ja existente";
    echo mysqli_error($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS 
leads(
id INT AUTO_INCREMENT PRIMARY KEY,
vendedor_id INT NOT NULL,
carro_id INT NOT NULL,
data DATeTIME NOT NULL,
ip VARCHAR(45)
)";

if(mysqli_query($conn, $sql)){
    echo "tabela leads criada";
}else{
    echo "$sql . erro ao criar ou tabela ja existente ";
    echo mysqli_error($conn);
}

?>