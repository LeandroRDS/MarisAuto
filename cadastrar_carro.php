<?php 
include 'include\conexao.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];

    echo "dados recebifos";

    $foto = $_FILES['foto']['name'];
    $tmp  = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmp, "uploads/".$foto);

    $sql = "INSERT INTO carros (descricao, valor, foto) 
    VALUES ('$des1cricao','$valor','$foto')";

    $conn->query($sql);
    
    echo "Carro cadastrado com sucesso";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre seu carro </title>
</head>
<body>
    <h2>Cadastre se carro</h2>

    <form action="cadastrar_carro.php" method="post" enctype="multipart/form-data">
        descrição:<br>
        <input type="text" name="descricao" required><br><br>

        valor:<br>
        <input type="number" name="valor" required><br><br>

        foto:<br>
        <input type="file" name="foto" required><br><br>

        <button type="submit">Cadastrar<button>
    </form>
</body>
</html>