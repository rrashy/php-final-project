<?php
	session_start(); //inicia uma variavel de sessao
	include '../util/validacao.class.php';
	include '../model/usuario.class.php';
	include '../dao/usuariodao.php';

    switch($_GET['op']){
        case "cadastrar":
            if(isset($_POST['txtnome']) && 
            isset($_POST['txtsenha']) &&
            isset($_POST['txtemail']) &&
            isset($_POST['txtidade']) &&
            isset($_POST['txtfone'])){

                $erros = array();

                if(!Validacao::validarNome($_POST['txtnome'])){
					$erros[] = 'Nome invalido.';
                }
            if(count($erros) == 0){

                $u = new Usuario;

                $u->nome = $_POST['txtnome'];
                $u->idade = $_POST['txtidade'];
                $u->email = $_POST['txtemail'];
                $u->senha = $_POST['txtsenha'];
                $u->telefone = $_POST['txtfone'];

                $uDAO = new UsuarioDAO();
                $uDAO->cadastrar($u);

                $_SESSION['msg'] = 'Usuario cadastrado com sucesso!';

                $_SESSION['loginEncontrado'] = serialize($u);

                header('Location:../view/login.resposta.php');
            } else{
                $_SESSION['erros'] = serialize($erros);
                header('Location:../view/usuario-erros.php');
            }
    } else{
        echo 'Algo não está preenchido!';
    }
    break;

    case "logar":
        if(isset($_POST['btnLogar'])){
            $u = new Usuario();

            $u->email = $_POST['txtemail'];
            $u->senha = $_POST['txtsenha'];

            $uDAO = new UsuarioDAO();
            $usuario = $uDAO->login($u);
            
            if($usuario == null){
                echo "<script type=\"text/javascript\">
                alert(\"Usuário/senha inválido(s)!\");
                window.location=\"../view/login.php\";
            </script>";
            }else{
            $_SESSION['msg'] = 'Usuario logado com sucesso!';
            $_SESSION['loginEncontrado'] = serialize($usuario);
            header('Location: ../view/login.resposta.php');
            }
    }
        break;

    case "sair" :
        if(isset($_SESSION['loginEncontrado'])){
            session_destroy();
            header('Location:../view/login.php');
        }    
        break;        
}
?>