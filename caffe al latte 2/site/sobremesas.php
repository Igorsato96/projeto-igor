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
                <div class="sobremesas"><img src="../assets/img/menusimg/cardapio sobremesas.png" alt="">
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
            <div class="titulo-bebidas">Sobremesas</div>
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
                        <h1 class="text-random2">COOKIE</h1>
                        <div class="product-pic"><img src="../assets/img/sobremesas/cookie.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-expresso" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-expresso" id="popup-expresso">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="../assets/img/sobremesas/cookie.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>COOKIE</h1>
                                                <p>Qual é o segredo por trás de cada xícara? Nada como o aroma e o sabor de um expresso tirado na hora! Nascido na Itália, o café expresso foi concebido para agilizar o processo de produção da bebida. Os apressadinhos
                                                    de plantão que adoram um bom café, agradecem! A bebida é preparada com os mesmos grãos do café coado, mas nesse método, a estrela responsável pelos aromas e os sabores é a máquina de expresso. Nossa
                                                    cafeteria conta com os melhores equipamentos , para que você desfrute do sabor ideal.</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">TORTA CHOCOLATE</h1>
                        <div class="product-pic"><img src="../assets/img/sobremesas/torta chocolate.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-torta" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-torta" id="popup-torta">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="../assets/img/sobremesas/torta chocolate.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>TORTA CHOCOLATE</h1>
                                                <p>Qual é o segredo por trás de cada xícara? Nada como o aroma e o sabor de um expresso tirado na hora! Nascido na Itália, o café expresso foi concebido para agilizar o processo de produção da bebida. Os apressadinhos
                                                    de plantão que adoram um bom café, agradecem! A bebida é preparada com os mesmos grãos do café coado, mas nesse método, a estrela responsável pelos aromas e os sabores é a máquina de expresso. Nossa
                                                    cafeteria conta com os melhores equipamentos , para que você desfrute do sabor ideal.</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">BOLO BRIGADEIRO</h1>
                        <div class="product-pic"><img src="../assets/img/sobremesas/bolo brigadeiro.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-expresso" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-expresso" id="popup-expresso">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="../assets/img/sobremesas/bolo brigadeiro.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>COOKIE</h1>
                                                <p>Qual é o segredo por trás de cada xícara? Nada como o aroma e o sabor de um expresso tirado na hora! Nascido na Itália, o café expresso foi concebido para agilizar o processo de produção da bebida. Os apressadinhos
                                                    de plantão que adoram um bom café, agradecem! A bebida é preparada com os mesmos grãos do café coado, mas nesse método, a estrela responsável pelos aromas e os sabores é a máquina de expresso. Nossa
                                                    cafeteria conta com os melhores equipamentos , para que você desfrute do sabor ideal.</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">SONHO</h1>
                        <div class="product-pic"><img src="../assets/img/sobremesas/sonho.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-expresso" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-expresso" id="popup-expresso">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="../assets/img/sobremesas/cookie.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>SONHO</h1>
                                                <p>Qual é o segredo por trás de cada xícara? Nada como o aroma e o sabor de um expresso tirado na hora! Nascido na Itália, o café expresso foi concebido para agilizar o processo de produção da bebida. Os apressadinhos
                                                    de plantão que adoram um bom café, agradecem! A bebida é preparada com os mesmos grãos do café coado, mas nesse método, a estrela responsável pelos aromas e os sabores é a máquina de expresso. Nossa
                                                    cafeteria conta com os melhores equipamentos , para que você desfrute do sabor ideal.</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">PRETZEL CANELA</h1>
                        <div class="product-pic"><img src="../assets/img/sobremesas/pretzel.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-expresso" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-expresso" id="popup-expresso">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="../assets/img/sobremesas/cookie.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>PRETZEL CANELA</h1>
                                                <p>Qual é o segredo por trás de cada xícara? Nada como o aroma e o sabor de um expresso tirado na hora! Nascido na Itália, o café expresso foi concebido para agilizar o processo de produção da bebida. Os apressadinhos
                                                    de plantão que adoram um bom café, agradecem! A bebida é preparada com os mesmos grãos do café coado, mas nesse método, a estrela responsável pelos aromas e os sabores é a máquina de expresso. Nossa
                                                    cafeteria conta com os melhores equipamentos , para que você desfrute do sabor ideal.</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">MOCHI</h1>
                        <div class="product-pic"><img src="../assets/img/sobremesas/mochi.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-expresso" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-expresso" id="popup-expresso">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="../assets/img/sobremesas/cookie.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>MOCHI</h1>
                                                <p>Qual é o segredo por trás de cada xícara? Nada como o aroma e o sabor de um expresso tirado na hora! Nascido na Itália, o café expresso foi concebido para agilizar o processo de produção da bebida. Os apressadinhos
                                                    de plantão que adoram um bom café, agradecem! A bebida é preparada com os mesmos grãos do café coado, mas nesse método, a estrela responsável pelos aromas e os sabores é a máquina de expresso. Nossa
                                                    cafeteria conta com os melhores equipamentos , para que você desfrute do sabor ideal.</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">TIRAMISU ITALIANO</h1>
                        <div class="product-pic"><img src="../assets/img/sobremesas/tiramisu.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-expresso" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-expresso" id="popup-expresso">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="../assets/img/sobremesas/cookie.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>TIRAMISU ITALIANO</h1>
                                                <p>Qual é o segredo por trás de cada xícara? Nada como o aroma e o sabor de um expresso tirado na hora! Nascido na Itália, o café expresso foi concebido para agilizar o processo de produção da bebida. Os apressadinhos
                                                    de plantão que adoram um bom café, agradecem! A bebida é preparada com os mesmos grãos do café coado, mas nesse método, a estrela responsável pelos aromas e os sabores é a máquina de expresso. Nossa
                                                    cafeteria conta com os melhores equipamentos , para que você desfrute do sabor ideal.</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">CHEESECAKE JAPONES</h1>
                        <div class="product-pic"><img src="../assets/img/sobremesas/cake.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-expresso" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-expresso" id="popup-expresso">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="../assets/img/sobremesas/cookie.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>CHEESECAKE JAPONES</h1>
                                                <p>Qual é o segredo por trás de cada xícara? Nada como o aroma e o sabor de um expresso tirado na hora! Nascido na Itália, o café expresso foi concebido para agilizar o processo de produção da bebida. Os apressadinhos
                                                    de plantão que adoram um bom café, agradecem! A bebida é preparada com os mesmos grãos do café coado, mas nesse método, a estrela responsável pelos aromas e os sabores é a máquina de expresso. Nossa
                                                    cafeteria conta com os melhores equipamentos , para que você desfrute do sabor ideal.</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
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