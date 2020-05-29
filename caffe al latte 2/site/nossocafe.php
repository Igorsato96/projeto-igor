<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAFFE AL LATTE</title>
    <link rel="stylesheet" href="../assets/css/estilo.css?v=<? rand(0, 99) ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/06746c852c.js" crossorigin="anonymous"></script>
</head>

<body class="bebidas">
    <div class="popup-bebidas">
        <header>
            <menu>
                <div class="sobremesas"><img src="../assets/img/menusimg/nosso café.png" alt="">
                </div>
                <div class="logo">
                    <a href="../index.php" class="logo"><img src="../assets/img/logo.png" alt=""></a>
                </div>
                <div class="menus">
                    <div class="menu">
                        <a href="../index.php">Home</a>
                    </div>
                    <div class="menu">
                        <a href="../site/cardapio.php">CARDAPIO</a>
                    </div>
                    <div class="menu">
                        <a href="../site/novidades.php">NOVIDADES</a>
                    </div>
                    <div class="menu">
                        <a href="../site/receitas.php">RECEITAS</a>
                    </div>
                    <div class="menu-pedidos">
                        <a href="#"><i class="fas fa-shopping-bag"></i>PEDIDOS</a>
                    </div>
                    <div class="menu-login">
                        <a href="../site/cadastro.php">LOGIN | CADASTRAR</a>
                    </div>
                </div>
            </menu>
        </header>
        <main>
            <div class="titulo-bebidas">Nosso Café</div>
            <div class="qtd-produtos">
                <div class="quantidade">8 produtos </div>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Ordenar por<div class="droplogo"><i class="fas fa-chevron-down"></i></div></button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
            </div>
            <section>
                <div class="product-cardp">
                    <div class="product-card">
                        <h1 class="text-random2">GRÃO FORTE</h1>
                        <div class="product-pic"><img src="../assets/img/nossocafe/grao forte.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <div class="product-button saiba-mais">saiba mais</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">GRÃO MÉDIO</h1>
                        <div class="product-pic"><img src="../assets/img/nossocafe/grao medio.png" alt=""></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <div class="product-button saiba-mais">saiba mais</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">GRÃO SUAVE</h1>
                        <div class="product-pic"><img src="../assets/img/nossocafe/grao suave.png" alt=""></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <div class="product-button saiba-mais">saiba mais</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">CAFÉ EM PÓ PREMIUM</h1>
                        <div class="product-pic"><img src="../assets/img/nossocafe/cafe po.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <div class="product-button saiba-mais">saiba mais</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>
        </main>
        <footer>
            <div class="footer-pai">
                <div class="chevron"><i class="fas fa-chevron-up"></i></div>
            </div>
            <div class="menus-footer">
                <div class="menus-menu">
                    <div class="menu-center">
                        <p>menu</p>
                    </div>
                    <div class="ul-menu">
                        <ul class="menus-home">
                            <a href="index.php">
                                <li class="menu-home">Home</li>
                            </a>
                            <a href="cardapio.php">
                                <li class="menu-home">Cardapio</li>
                            </a>
                            <a href="novidades.php">
                                <li class="menu-home">Novidades</li>
                            </a>
                            <a href="receitas.php">
                                <li class="menu-home">Receitas</li>
                            </a>
                        </ul>
                    </div>
                    <div class="grupo-footer">
                        <div>
                            <div class="font-footer ">nos siga</div>
                            <div class="icon-color">
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                        <div>
                            <div class="font-footer ">CONTATO</div>
                            <div class="contato-color">( 11 ) 2266 - 7445</div>
                        </div>
                        <div>
                            <a class="links" href="termos.php">
                                <div class="font-faq">TERMOS E CONDIÇÕES</div>
                            </a>
                            <a class="links" href="duvidas.php">
                                <div class="font-faq">DÚVIDAS FREQUENTES</div>
                            </a>
                        </div>
                    </div>
                    <div class="criador">
                        <div>
                            <div class="powered">Powered</div>
                            <div class="autor">BY MASSAHIKO</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="../assets/js/main.js"></script>
</body>

</html>