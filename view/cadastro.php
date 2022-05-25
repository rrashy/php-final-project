<?php
session_start();
if(isset($_SESSION['loginEncontrado'])){
    header('Location: login.resposta.php');
}else{
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sneakers Sul</title>
    <link rel="shortcut icon" href="../img/snkr.jpg" />
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="../index.php" class="brand-logo">Sneakers Sul </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../view/sobre.loja.php">Sobre</a></li>
                <li><a href="../view/calendario.php">Calendario</a></li>
                <li><a href="../view/cadastro.php">Cadastro</a></li>
                <li><a href="../view/login.php">Entrar</a></li>
                <li><a href="../view/login.resposta.php">Meus dados</a></li>
            </ul>



            <ul id="nav-mobile" class="sidenav">
                <li><a href="#">Calendario</a></li>
                <li><a href="#">Cadastro</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container" style="padding-inline-end: 7%; ">
                <form class="col s12" action="../controller/loja.controller.php?op=cadastrar" method="POST" style="padding-left: 12%; color:black;">
                    <div class="row 12">
                        <div class="input-field col s12">
                            <p>Digite seu nome: </p>
                            <input placeholder="Digite seu nome" name="txtnome" pattern="[a-zA-Z]{3,100}" type="text" placeholder="Digite o nome:" required autofocus>
                        </div>

                        <div class="input-field col s12">
                            <p>Digite seu email: </p>
                            <input placeholder="exemple@exemple.com" name="txtemail" type="email" required>
                        </div>

                        <div class="input-field col s12">
                            <p>Digite sua senha: </p>
                            <input placeholder="Digite uma senha de até 6 digitos." name="txtsenha" type="password" required>
                        </div>

                        <div class="input-field col s12">
                            <p>Digite sua idade: </p>
                            <input placeholder="Digite sua idade" name="txtidade" type="number" required>
                        </div>
                        <div class="input-field col s12">
                            <p>Digite seu telefone:</p>
                            <input placeholder="(99)9999-999" name="txtfone" type="number" required>
                        </div>
                        <form action="#">
                            <p style="padding-left: 2%;">
                                <label>
                                    <input type="checkbox" required/>
                                    <span>Aceito os termos</span>
                                </label>
                            </p>
                            <p style="padding-left: 2%;">
                                <label>
                                    <input type="checkbox" />
                                    <span>Aceito receber os lançamentos por email</span>
                                </label>
                            </p>
                        </form>
                        <div class="input-field col s12">
                            <a>
                                <button class="btn waves-effect waves-light" type="submit" name="action" value="cadastrar">Enviar
                                    <i class="material-icons right">send</i>
                                </button>
                            </a>
                            <input class="btn btn-warning" type="reset" name="btnLimpar" value="Limpar dados">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>

    </div>







    <footer class="page-footer teal">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Lojas parceiras</h5>
                    <p class="grey-text text-lighten-4">Sempre tenha cuidado onde você compra seus Sneakers, muitas lojas vendem produtos de primeira linha, não se engane, as vezes o barato sai caro.</p>


                </div>

                <div class="col l3 s12" style="padding-left: 20%;">
                    <h5 class="white-text">Lojas</h5>
                    <ul>
                        <li><a class="white-text" href="https://www.nike.com.br/snkrs"> Nike</a></li>
                        <li><a class="white-text" href="https://droper.app/">Droper</a></li>
                        <li><a class="white-text" href="https://www.artwalk.com.br/">Artwalk</a></li>
                        <li><a class="white-text" href="https://www.maze.com.br/">Maze</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Made by Sneakers Sul
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

</body>

</html>