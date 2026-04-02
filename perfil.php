<?php
require_once 'config.php';

$usuario_name = $_GET['user'] ?? null;
if (!isset($usuario_name)) {
    $usuario_id = 3;
} else {
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE usuario = ? LIMIT 1");
    $stmt->bind_param("s", $usuario_name);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if($resultado->num_rows > 0){
        $dados = $resultado->fetch_assoc();
        $usuario_id = $dados['id'];

    }else{
        http_response_code(404);
        die("Usuario '$usuario_name' não encontrado");
    }
};

if(isset($_SESSION['usuario_id'])){
    $dados = verificarLogin($conn, $_SESSION['usuario_id']);
}else{
    $dados = verificarLogin($conn, $usuario_id);
}

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
                    <a href="<?= $href = $dados->href ?>">
                        <div class="div_cont_menu_btn-login">
                            <button><i class="fa-regular fa-user"></i></button>
                            <span><?= $dados->status ?></span>
                        </div>
                    </a>
                    <?php if ($dados->usuarioLogado): ?>

                        <a href="<?= $dados->add_anuncio ?>">
                            <div class="div_cont_menu_btn-login">
                                <button><i class="fa-solid fa-plus"></i></button>
                                <span>Anunciar</span>
                            </div>
                        </a>

                    <?php endif; ?>

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
            while ($carro = $dados->resultado->fetch_assoc()):
            ?>

                <div class="carro opcoes">

                    <div class="div-img-foto-carro">
                        <img class="class-img-opcao"
                            src="uploads/<?php echo $carro['foto'] ?? 'padrao.png'; ?>" alt="Hb20 2024 1.0 Completo">
                    </div>

                    <div class="div-descricao">
                        <span class="descricao"> <?php echo $carro['descricao'] ?? 'Sem descrição'; ?> <br> Entrada + parcelas a partir de <?php echo $carro['valor']; ?> </span>
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