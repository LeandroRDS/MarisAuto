<?php

if (isset($_SESSION['usuario_id'])) {
    header("Location: perfil.php");
    exit;
    
}


$usuario_id = $_GET['user']  ?? null;
//aqui eu pego o usario na url se nao tiver fica null

if (!empty($usuario_id)) {//nerificando se usuario NAO esta vasio
    $_GET['user'] = $usuario_id; //se existir o usario ele vai ficar em get user
    include __DIR__ . '/perfil.php';
    exit();
}

mostrarPaginaInical();//chamando função que vai mostrar a pagina inicial

function mostrarPaginaInical()//funação mostara pagina inicail
{


    require_once 'config.php'; //importando includes

  

    $usuario_name = $_GET['user'] ?? null;//

    if (!isset($usuario_name)) {
        $usuario_id = 3;
    } else {

        $usuario_id = 3;
    };
    $dados = verificarLogin($conn, $usuario_id);
    $resultado = $dados->resultado;

?>


    <!DOCTYPE html>
    <html lang="pt-br">

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
                        <a href="<?= $dados->href ?>">
                            <div class="div_cont_menu_btn-login">
                                <button><i class="fa-regular fa-user"></i></button>
                                <span><?= $dados->status ?></span>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="discricao-header">
                    <div class="div-contencao">
                        <span id="span3">MC MOTORS</span>
                    </div>
                </div>
            </div>
        </header>

        <body>

            <div class="div-span-apresentacao">
                <span class="spam-apresentacao">Nossas opçoes !</span>
            </div>

            <div class="conteiner_opcoes">


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

                            <div class=" div-btn-comprar div-acoa ">

                                <button
                                    class="btn_whasapp LATO"
                                    data-vendedor="<?php echo $carro['usuario_id']; ?>"
                                    data-descricao="<?php echo $carro['descricao']; ?>"
                                    data-carro_id="<?php echo $carro['id']; ?>">
                                    WhatsApp
                                </button>

                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>

            <script src="javascript/clikcomprar.js"></script>

        </body>

        


    </html>
<?php
}

?>