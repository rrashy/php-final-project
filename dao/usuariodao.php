<?php
require_once ('../persistence/conexaobanco.php');

Class UsuarioDAO{

    private $conexao = null; 

    public function __construct() {
        $this->conexao = ConexaoBanco::getInstance();
    } 
    
    public function cadastrar($usuario){       

        try{
        $stat = $this->conexao->prepare("INSERT INTO Usuario (codeUser,nome,senha,email,idade,telefone) VALUES 
        (null,:nome,:senha,:email,:idade,:telefone)");

        $stat->bindValue(":nome",$usuario->nome);
        $stat->bindValue(":senha",$usuario->senha);
        $stat->bindValue(":email",$usuario->email);
        $stat->bindValue(":idade",$usuario->idade);
        $stat->bindValue(":telefone",$usuario->telefone);

        $stat->execute();

        $this->conexao = null;
        }catch(PDOException $e){
            echo '⚠️Erro ao cadastrar usuario!⚠️'. $e;
        }
    }

    public function login($usuario){
        try{
        $stat = $this->conexao->prepare("SELECT * FROM usuario WHERE email = ? AND senha = ?");
        $stat->bindValue(1,$usuario->email);
        $stat->bindValue(2,$usuario->senha);

        $stat -> execute();
        
        $usuario = null;
        $usuario = $stat->fetchObject('Usuario');
        return $usuario;
               
        }catch(PDOException $e) {
            echo '⚠️Erro ao encontrar usuario ou usuario inexistente!⚠️'.$e;
        }
    }

}