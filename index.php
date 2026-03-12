<?php
include 'includes/conexao.php'; //conexao com o banco de dados
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
            
            
             <div class="opcoes" ><!--indicação-->

                <div class="div-img-foto-carro">
                    <img class="class-img-opcao" src="img/indicacao.jpg" alt="Fature com a sua indicação" >
                </div>

                <div class="div-descricao">
                    <span class="descricao">Fature com a sua indicação.<br>Ganhe bonos de até 500 Reis por indicação.<br> Entre em contato  </span>
                </div>

                <div class="div-conteiner-btn">

                    <div id="Indicação" class=" div-btn-comprar div-acoa ">
                        <a class="LATO, " >WhatsApp</a>
                    </div>
                </div>
            </div>   


            
            <?php
				$sql = "SELECT * FROM carros ORDER BY id DESC";
				$resultado = $conn->query($sql);
			?>


			<?php
				while($carro = $resultado->fetch_assoc()):
			?>
            
             <div class="carro opcoes" >

                <div class="div-img-foto-carro">
                    <img class="class-img-opcao" src="uploads/<?php echo $carro['foto'];?>" alt="Hb20 2024 1.0 Completo" >
                </div>

                <div class="div-descricao">
                    <span class="descricao"> <?php echo $carro['descricao'];?> <br> Entrada + parcelas a partir de <?php echo $carro['valor'];?> </span>
                </div>

                <div class="div-conteiner-btn">

                    <div id="Megane" class=" div-btn-comprar div-acoa ">
                        <a class="LATO, " >WhatsApp</a>
                    </div>
                </div>
            </div>    

        <?php endwhile; ?>


            <div class="opcoes" ><!--megane-->

                <div class="div-img-foto-carro">
                    <img class="class-img-opcao" src="img/megane.jpg" alt="Hb20 2024 1.0 Completo" >
                </div>

                <div class="div-descricao">
                    <span class="descricao">Renault Megane 2011 1.0 Completo <br> Entrada + parcelas a partir de R$1390,00 </span>
                </div>

                <div class="div-conteiner-btn">

                    <div id="Megane" class=" div-btn-comprar div-acoa ">
                        <a class="LATO, " >WhatsApp</a>
                    </div>
                </div>
            </div>    

   


            <div class="opcoes" ><!--focus-->

                <div class="div-img-foto-carro">
                    <img class="class-img-opcao" src="img/focus.jpg" alt="Focus 2013 1.6 Automático" >
                </div>

                <div class="div-descricao">
                    <span class="descricao">Focus 2013 1.6 Automático <br> Entrada + parcelas a partir de R$1590,00 </span>
                </div>

                <div class="div-conteiner-btn">

                    <div id="Focus" class=" div-btn-comprar div-acoa ">
                        <a class="LATO, " >WhatsApp</a>
                    </div>
                </div>
            </div>    


            <div class="opcoes" ><!--start 2010-->

                <div class="div-img-foto-carro">
                    <img class="class-img-opcao" src="img/start 2010.jpg" alt="Hb20 2024 1.0 Completo" >
                </div>

                <div class="div-descricao">
                    <span class="descricao">Honda CG Start 150 2010 <br> 6.900 avista, Cartão de credito ou FGTS </span>
                </div>

                <div class="div-conteiner-btn">

                    <div id="Start 2010" class=" div-btn-comprar div-acoa ">
                        <a class="LATO, " >WhatsApp</a>
                    </div>
                </div>
            </div>    


            <div class="opcoes" ><!--voyage 21-->

                <div class="div-img-foto-carro">
                    <img class="class-img-opcao" src="img/voyage 21.jpg" alt="Voyage 2021 1.6 Completo" >
                </div>

                <div class="div-descricao">
                    <span class="descricao">Voyage 2021 1.6 Completo <br> Entrada + parcelas a partir de R$1490,00 </span>
                </div>

                <div class="div-conteiner-btn">

                    <div id="Voyage 21" class=" div-btn-comprar div-acoa ">
                        <a class="LATO, " >WhatsApp</a>
                    </div>
                </div>
            </div>    

            <div class="opcoes" ><!--corolla 11-->

                <div class="div-img-foto-carro">
                    <img class="class-img-opcao" src="img/corolla 11.jpg" alt="Corolla 2011 2.0 Automático" >
                </div>

                <div class="div-descricao">
                    <span class="descricao">Corolla 2011 2.0 Automático <br> Entrada + parcelas de a partir R$1590,00 </span>
                </div>

                <div class="div-conteiner-btn"> 

                    <div id="Corolla 11" class=" div-btn-comprar div-acoa ">
                        <a class="LATO, " >WhatsApp</a>
                    </div>
                </div>
            </div>    


            <div class="opcoes" ><!--onix 13-->

                <div class="div-img-foto-carro">
                    <img class="class-img-opcao" src="img/onix 13.jpg" alt="Onix 2013 1.0 Completo" >
                </div>

                <div class="div-descricao">
                    <span class="descricao">Onix 2013 1.0 Completo <br> Entrada + parcelas de a partir R$1290,00 </span>
                </div>

                <div class="div-conteiner-btn">

                    <div id="Onix 13" class=" div-btn-comprar div-acoa ">
                        <a class="LATO, " >WhatsApp</a>
                    </div>
                </div>
            </div>    
   

           
            <div class="opcoes" ><!--onix 19-->

                <div class="div-img-foto-carro">
                    <img class="class-img-opcao" src="img/onix  19.jpg" alt="Onix 2019 1.0 Completo" >
                </div>

                <div class="div-descricao">
                    <span class="descricao">Onix 2019 1.0 Completo <br> Entrada + parcelas a partir de R$1490,00 </span>
                </div>

                <div class="div-conteiner-btn">

                    <div id="Onix 19" class=" div-btn-comprar div-acoa ">
                        <a class="LATO, " >WhatsApp</a>
                    </div>
                </div>
            </div>    


            <div class="opcoes" ><!--compass 18-->

                <div class="div-img-foto-carro">
                    <img class="class-img-opcao" src="img/compass.jpg" alt="Compass 2018 2.0" >
                </div>

                <div class="div-descricao">
                    <span class="descricao">Compass 2018 2.0<br> Entrada + parcelas a partir de R$2100,00 </span>
                </div>

                <div class="div-conteiner-btn">

                    <div id="Compass 18" class=" div-btn-comprar div-acoa ">
                        <a class="LATO, " >WhatsApp</a>
                    </div>
                </div>
            </div>    


            <div class="opcoes" ><!--ka 20-->

                <div class="div-img-foto-carro">
                    <img class="class-img-opcao" src="img/KA 20.jpg" alt="Ford ka 2020 1.0 Completo" >
                </div>

                <div class="div-descricao">
                    <span class="descricao">Ford ka 2020 1.0 Completo<br> Entrada + parcelas a partir de R$1490,00 </span>
                </div>

                <div class="div-conteiner-btn">

                    <div id="Ka 20" class=" div-btn-comprar div-acoa ">
                        <a class="LATO, " >WhatsApp</a>
                    </div>
                </div>
            </div>


            <div class="opcoes" ><!--kardian 25-->

                <div class="div-img-foto-carro">
                    <img class="class-img-opcao" src="img/kardian 25.jpg" alt="Renault kardian 2025 1.0" >
                </div>

                <div class="div-descricao">
                    <span class="descricao">Renault kardian 2025 1.0<br> Entrada + parcelas a partir de R$2300,00 </span>
                </div>

                <div class="div-conteiner-btn">

                    <div id="kardian 25" class=" div-btn-comprar div-acoa ">
                        <a class="LATO, " >WhatsApp</a>
                    </div>
                </div>
            </div>

            <div class="opcoes" ><!--Voyage 23-->

                <div class="div-img-foto-carro">
                    <img class="class-img-opcao" src="img/voyage 23.jpg" alt="Voyage 2023 1.0 Completo" >
                </div>

                <div class="div-descricao">
                    <span class="descricao">Voyage 2023 1.0 Completo<br> Entrada + parcelas a partir de R$1690,00 </span>
                </div>

                <div class="div-conteiner-btn">

                    <div id="Voyage 23" class=" div-btn-comprar div-acoa ">
                        <a class="LATO, " >WhatsApp</a>
                    </div>
                </div>
            </div>
    
            <div class="opcoes" ><!--Onix 20-->

                <div class="div-img-foto-carro">
                    <img class="class-img-opcao" src="img/onix 20.jpg" alt="Onix Premier 2020 1.0" >
                </div>

                <div class="div-descricao">
                    <span class="descricao">Onix Premier 2020 1.0<br> Entrada + parcelas a partir de R$1690,00 </span>
                </div>

                <div class="div-conteiner-btn">

                    <div id="Onix 20" class=" div-btn-comprar div-acoa ">
                        <a class="LATO, " >WhatsApp</a>
                    </div>
                </div>
            </div>


            <div class="opcoes" ><!--compass 18-->

                <div class="div-img-foto-carro">
                    <img class="class-img-opcao" src="img/fusca.jpg" alt="Fusca 74 Placa preta" >
                </div>

                <div class="div-descricao">
                    <span class="descricao">Fusca 74 Placa preta <br>  Apenas R$ 35.900 aceitamos troca, FGTS e cartão de credito.</span>
                </div>

                <div class="div-conteiner-btn">

                    <div id="Fusca" class=" div-btn-comprar div-acoa ">
                        <a class="LATO, " >WhatsApp</a>
                    </div>
                </div>
            </div>


           



  

           

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

