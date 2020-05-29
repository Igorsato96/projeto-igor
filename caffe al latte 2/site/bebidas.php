<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAFFE AL LATTE</title>
    <link rel="stylesheet" href="../assets/css/estilo.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/06746c852c.js" crossorigin="anonymous"></script>
</head>

<body class="bebidas">
    <div class="popup-bebidas">
        <header>
            <div class="bebida"><img src="../assets/img/menusimg/bebidas cardapio bg.png" alt="">
            </div>
            <menu>
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
                        <a href="../adm/cadastro.php">LOGIN | CADASTRAR</a>
                    </div>
                </div>
            </menu>
        </header>
        <main>
            <div class="titulo-bebidas">Bebidas</div>
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
                        <h1 class="text-random2">EXPRESSO</h1>
                        <div class="product-pic"><img src="../assets/img/bebidas/expresso.png"></div>
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
                                                <img src="../assets/img/bebidas/expresso.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>EXPRESSO</h1>
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
                        <h1 class="text-random2">CAFÉ AMERICANO</h1>
                        <div class="product-pic"><img src="../assets/img/bebidas/americano.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-cafe" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-cafe" id="popup-cafe">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="../assets/img/bebidas/americano.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>CAFÉ AMERICANO</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium odio consectetur pariatur corrupti exercitationem tempore, voluptate dolore itaque incidunt explicabo quae expedita et ad neque! Laboriosam
                                                    eum nam eius odit!</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">LATTE</h1>
                        <div class="product-pic"><img src="../assets/img/bebidas/latte.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-latte" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-latte" id="popup-latte">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="../assets/img/bebidas/latte.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>LATTE</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium odio consectetur pariatur corrupti exercitationem tempore, voluptate dolore itaque incidunt explicabo quae expedita et ad neque! Laboriosam
                                                    eum nam eius odit!</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">CAPUCCINO</h1>
                        <div class="product-pic"><img src="../assets/img/bebidas/capuccino.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-capuccino" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-capuccino" id="popup-capuccino">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="../assets/img/bebidas/capuccino.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>CAPUCCINO</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium odio consectetur pariatur corrupti exercitationem tempore, voluptate dolore itaque incidunt explicabo quae expedita et ad neque! Laboriosam
                                                    eum nam eius odit!</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random">Cha de limão</h1>
                        <div class="product-pic-cha"></div>
                        <div class="product-colors">
                            <span class="limao active" data-text="cha limao" data-text2="Cha de limao e delicios" data-pic="url(../assets/img/bebidas/chalimao.png)"></span>
                            <span class="pessego" data-text="cha pessego" data-pic="url(../assets/img/bebidas/chapessego.png)"></span>
                            <span class="matcha" data-text="matcha" data-pic="url(../assets/img/bebidas/matcha.png)"></span>
                            <span class="sakura" data-text="cha sakura" data-pic="url(../assets/img/bebidas/chasakura.png)"></span>
                        </div>
                        <div class="product-info">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-cha" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-cha" id="popup-cha">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="../assets/img/bebidas/chalimao.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>Chá</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium odio consectetur pariatur corrupti exercitationem tempore, voluptate dolore itaque incidunt explicabo quae expedita et ad neque! Laboriosam
                                                    eum nam eius odit!</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">CHOCOLATE QUENTE</h1>
                        <div class="product-pic"><img src="../assets/img/bebidas/chocolate quente.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-quente" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-quente" id="popup-quente">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="../assets/img/bebidas/chocolate quente.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>CHOCOLATE QUENTE</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium odio consectetur pariatur corrupti exercitationem tempore, voluptate dolore itaque incidunt explicabo quae expedita et ad neque! Laboriosam
                                                    eum nam eius odit!</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">MOCCHA</h1>
                        <div class="product-pic"><img src="../assets/img/bebidas/moccha.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-moccha" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-moccha" id="popup-moccha">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="../assets/img/bebidas/moccha.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>MOCCHA</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium odio consectetur pariatur corrupti exercitationem tempore, voluptate dolore itaque incidunt explicabo quae expedita et ad neque! Laboriosam
                                                    eum nam eius odit!</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random1">MILKSHAKE CHOCOLATE</h1>
                        <div class="product-pic-milkshake"></div>
                        <div class="product-colors-milk">
                            <span class="chocolate active" data-text1="MILKSHAKE CHOCOLATE" data-pic1="url(../assets/img/bebidas/milkchoco.png)"></span>
                            <span class="morango" data-text1="MILKSHAKE MORANGO" data-pic1="url(../assets/img/bebidas/milkmora.png)"></span>
                            <span class="baunilha" data-text1="MILKSHAKE BAUNILHA" data-pic1="url(../assets/img/bebidas/milkbau.png)"></span>
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-milkshake" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-milkshake" id="popup-milkshake">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="../assets/img/bebidas/milkchoco.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>MILKSHAKE</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium odio consectetur pariatur corrupti exercitationem tempore, voluptate dolore itaque incidunt explicabo quae expedita et ad neque! Laboriosam
                                                    eum nam eius odit!</p>
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