<?php
include 'includes/conexao.php'; //conexao com o banco de dados
session_start();
if (isset($_SESSION['usuario_id'])) {
    $usuarioLogado = true;
    $usuario_id = $_SESSION['usuario_id'];
    $sql = "SELECT * FROM carro WHERE usuario_id='$usuario_id'";
  
} else {
    $usuarioLogado = false;
    $sql = "SELECT * FROM carros ORDER BY id DESC";
}
    $resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">x

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maris Auto</title>

    <link rel="stylesheet" href="style/imports.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
    <header>
        <div class="div-img-fundo-header">

            <div class="menu_inicial">
                <div class="img-logo">
                    <img src="img/logomc.png" alt="img-logo">
                </div>

                <div class="div_cont_menu">
                    <a href="login.php">
                        <div class="div_cont_menu_btn-login">
                            <button><i class="fa-regular fa-user"></i></button>
                            <span>Entar</span>
                        </div>
                    </a>
                </div>

            </div>

            <div class="discricao-header">
                <div class="div-contencao">
                    <span id="span3">MC MOTORS</span>
                    <!-- <button id="btn_callaction_header">Mais informações</button> -->
                </div>
            </div>
        </div>
    </header>

    <body>

        <div class="div-span-apresentacao">
            <span class="spam-apresentacao">Nossas opçoes !</span>
        </div>

        <div class="conteiner_opcoes">

            <?php if ($usuarioLogado): ?>

                <a href="cadastrar_carro.php">
                    <div class="opcoes"><!--btn criar anúcios-->

                        <div class="div-img-foto-carro">
                            <img class="class-img-opcao" src="img/plus.png" alt="adicionar anuncio">
                        </div>

                        <div class="div-descricao">
                            <span class="descricao">Faça seus anúncioss</span>
                        </div>

                    </div>
                </a>
            <?php endif; ?>


            <div class="opcoes"><!--indicação-->

                <div class="div-img-foto-carro">
                    <img class="class-img-opcao" src="img/indicacao.jpg" alt="Fature com a sua indicação">
                </div>

                <div class="div-descricao">
                    <span class="descricao">Fature com a sua indicação.<br>Ganhe bonos de até 500 Reis por indicação.<br> Entre em contato </span>
                </div>

                <div class="div-conteiner-btn">

                    <div id="Indicação" class=" div-btn-comprar div-acoa ">
                        <a class="LATO, ">WhatsApp</a>
                    </div>
                </div>
            </div>

            <?php
            $resultado = $conn->query($sql);
            ?>


            <?php
            while ($carro = $resultado->fetch_assoc()):
            ?>

                <div class="carro opcoes">

                    <div class="div-img-foto-carro">
                        <img class="class-img-opcao" src="uploads/<?php echo $carro['foto']; ?>" alt="Hb20 2024 1.0 Completo">
                    </div>

                    <div class="div-descricao">
                        <span class="descricao"> <?php echo $carro['descricao']; ?> <br> Entrada + parcelas a partir de <?php echo $carro['valor']; ?> </span>
                    </div>

                    <div class="div-conteiner-btn">

                        <div id="Megane" class=" div-btn-comprar div-acoa ">
                            <a class="LATO, ">WhatsApp</a>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>


            <script src="javascript/btn_rodapeES.js "></script>
            <script src="javascript/btn_rodapeMC.js"></script>
            </footer>
    </body>

</html>