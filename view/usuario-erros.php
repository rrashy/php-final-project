<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Aula 21 </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS arquivo externo-->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style type="text/css">
        label {
            margin-top: 1em;
        }

        select {
            width: 50%;
        }

        .titulo2 {
            color: green;
        }
    </style>
</head>

<body>
    <section class="mx-auto" style="width: 50%; margin-top: 5%">

        <h5 class="titulo2">Ops! Algo deu errado...</h5>


        <hr>

        <?php
        //isset - verificando se a variável possui algum valor ou não 

        if (isset($_SESSION['erros'])) {
            // criando uma variável $erros que recebe a função array
            $erros = array();

            //descriptografa a variável de sessão erros e armazenando na variável $erros
            $erros = unserialize($_SESSION['erros']);

            //mostrando os erros na tela 
            foreach ($erros as $e) {
                echo '<br />' . $e;
            }
        } //fecha if
        ?>

        <hr>

    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>