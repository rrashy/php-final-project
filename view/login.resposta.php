<?php
  session_start();
  ob_start();

require_once('../util/verification.class.php');
verificacao('login.php');
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

    </div>
    <div class="row" style="padding-left: 32%;">
        <div class="col s12 m7">
            <div class="card">
                <div class="card-image">
                    <img src="../img/parra.jpg">
                    <span class="card-title">Minha conta</span>
                </div>
                <div class="card-content">
                    <h4>Em construção</h4>
                    <?php

                    if(isset($_SESSION['msg']) &&
                    isset($_SESSION['loginEncontrado'])){

                    require_once('../model/usuario.class.php');

                    $u = new Usuario();

                    $u = unserialize($_SESSION['loginEncontrado']);
                        

                    //aqui imprime os dados da model
                    echo $_SESSION['msg'].$u;

                    }

                    ?>

                        <button class="btn waves-effect waves-light">
                            <a style="color:white"href="../controller/loja.controller.php?op=sair">
                            Logout
                            <i class="material-icons logout">logout</i>
                        </a>
                        </button>
                    </a>
                </div>
            </div>
        </div>
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