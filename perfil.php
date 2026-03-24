<?php 
include("includes/conexao.php");

if(!isset($_GET['user'])){
    echo "usuarionão informado";
    exit;
}

$user = $_GET['user'];

$sqlUser = "SELECT * FROM usuarios WHERE 
usuario='$user'";
$resUser = mysqli_query($conn, $sqlUser);
$usuario = mysqli_fetch_assoc($resUser);

if(!$usuario){
    echo "usuario não encontrado";
}

$idUsuario = $usuario['id'];

$sqlCarros = "SELECT * FROM carros WHERE
usuario_id='$idUsuario'";
$resultado = mysqli_query($conn, $sqlCarros);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marisauto</title>
</head>
<body>
    <h1>Perfil de <?= $usuario['usuario'] ?>?></h1>

    <?php while($carro = mysqli_fetch_assoc($resultado)): ?>

        <?php endwhile; ?>
    
</body>
</html>