<html langue="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/estilo.css?v=<? rand(0, 99) ?>">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/06746c852c.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Já possui cadastro?</h2>
                <p class="description description-primary">Manter-se conectado conosco</p>
                <p class="description description-primary">Faça o login com suas informações pessoais</p>
                <button id="signin" class="btn btn-primary">login</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Criar conta</h2>
                <!-- <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div> -->
                <!-- social media-->
                <!-- <p class="description description-second">or use email for registrion:</p> -->
                <form class="form" method="POST" action="../adm/registro.php" id="cadastrar">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="nome" placeholder="nome">
                    </label>
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email"name="email" placeholder="Email">
                    </label>
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="cemail" placeholder="Confirmar Email">
                    </label>
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="senha">
                    </label>
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="csenha" placeholder="Confirmar senha">
                    </label>
                    <button type="submit" class="btn btn-second" form="cadastrar" >Cadastrar</button>
                </form>
            </div>
            <!--segunda columa-->
        </div>
        <!--primeiro conteudo-->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">bem vindo ao CAFFÈ AL LATTE!</h2>
                <p class="description description-primary">Cadastre seus dados!</p>
                <p class="description description-primary">E aproveite os nossos produtos</p>
                <button id="signup" class="btn btn-primary">Cadastrar</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Acessar o cadastro</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div>
                <!-- social media-->
                <p class="description description-second">Use seu email:</p>
                <form class="form" method="POST" action="../adm/login_acesso.php" id="login">
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email" placeholder="Email">
                    </label>
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Password">
                    </label>
                    <a class="password" href="#">forget your password</a>
                    <button type="submit" class="btn btn-second" form="login">Entrar</button>
                </form>

            </div>
        </div>
    </div>
    <script src="../assets/js/app.js"></script>
</body>

</html>