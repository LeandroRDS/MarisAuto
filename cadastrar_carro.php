<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'includes/conexao.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    var_dump($_POST);

    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];

    $foto = $_FILES['foto']['name'];
    $tmp  = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmp, "uploads/".$foto);

    $sql = "INSERT INTO carros (descricao, valor, foto)
    VALUES ('$descricao', '$valor', '$foto')";

    $conn->query($sql);

    //echo "Carro cadastrado com sucesso!";
    
    
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Cadastrar carro</h2>

<form method="POST" enctype="multipart/form-data">

Descrição:<br>
<input type="text" name="descricao"><br><br>

Valor:<br>
<input type="number" name="valor"><br><br>

Foto:<br>
<input type="file" name="foto"><br><br>

<button type="submit">Cadastrar</button>

</form>

</body>
</html>