<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require_once 'config.php';

if (!isset($_SESSION['usuario_id'])) {
    header("location: login.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    var_dump($_POST);
    $_usuario_id = $_SESSION['usuario_id'];

    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];

    $foto = $_FILES['foto']['name'];
    $tmp  = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmp, "uploads/" . $foto);

    $stmt = $conn->prepare("INSERT INTO carros (descricao, valor, foto, usuario_id)
    VALUES (? , ?, ?, ?)");
    $stmt->bind_param("sisi", $descricao, $valor, $foto, $_usuario_id);
    $stmt->execute();

    header("Location: perfil.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Carro</title>
    <link rel="stylesheet" href="style/imports.css">
    <link rel="stylesheet" href="style/cadastrar_carro.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>


<body>

    <header>    
        <h1>
            Faça seu anúncio !
        </h1>
    </header>

    <main>
        <form method="POST" enctype="multipart/form-data">

           <div class="campo">
               <span>Descrição</span>
                <input type="text" name="descricao">
           </div>

            <div class="campo">
                <span>Valor (da parcela)</span>
                <input type="number" name="valor">
            </div>

            <div class="campo">
                <span>Foto</span>
                <input class="btn_foto" type="file" name="foto">
            </div>

            <button class="btn_cadastrar" id="btn_cadastrar" type="submit">Cadastrar</button>

        </form>

    </main>

    <footer>
        <div class="div_footer_conteiner">
            <div class="conteiner_ES">
                <div class="div_footer_identificacao_ES div_footer">
                    <span>Criado Por Embrasoft &reg;</span>

                </div>
                <div class="div_footer_contatos_ES div_footer ">
                    <span class="span_contato span_contato_whatsapp">Whasapp</span>
                    <span class="span_contato span_contato_instagram">Instagran</span>
                    <span class="span_contato span_contato_linkedin">LinkedIn</span>
                </div>
            </div>

            <div class="conteiner_MC">
                <div class="div_footer_identificacao_MC div_footer">
                    <span>Mc Motors ltda &reg;</span>

                </div>
                <div class="div_footer_contatos_MC div_footer">
                    <span class="span_contato span_contato_whatsapp_MC">Whasapp</span>
                    <span class=" span_contato span_contato_intagram_mc">Instagran</span>
                    <span class="span_contato span_contato_avaliacoes" id="span_avaliacao">Avalçiações do Google</span>
                </div>
            </div>
        </div>


        <script src="javascript/btn_rodapeES.js "></script>
        <script src="javascript/btn_rodapeMC.js"></script>
    </footer>

</body>



</html>