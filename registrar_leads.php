<?php
include("includes/conexao.php"); //colocando a conexaõ do bd nessa arquivo

$vendedor_id = $_POST['vendedor_id'] ?? null;//pegando o valor que esta na variavel vendedor_id no clikcimprar.ls atravez do metodo post.
$carro_id = $_POST['carro_id '] ?? null;//pegano o valor que esta na variavel carro_id no arquivo clikcomprar.js atravez do metodo post e salvando ela na variavel carro_is para colocala no banco de dados.

if(!$vendedor_id || $carro_id ){
    die("dados invalidos");
}


if (!is_numeric($vendedor_id) || is_numeric($carro_id )) {//verificano se ambasas bariavens contem dados do tipo int
    die("Dados Invalidos");
} else {
    $stmt = $conn->prepare("INSERT INTO leads (vendedor_id, carro_id , data) 
VALUES (?,?,NOW())");//usando o statement para preparar a minha query sem passar os valores
    $stmt->bind_param("ii", $vendedor_id, $carro_id );//passando o tipo e os valores a serem slavos no bd
    $stmt->execute();//esecuntando a atatement
}
