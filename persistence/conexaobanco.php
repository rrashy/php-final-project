<?php
class ConexaoBanco extends PDO
{
    private static $instance = null;
 
    public function ConexaoBanco($dsn, $usuario, $senha)
    {
        parent::__construct($dsn, $usuario, $senha);
    }
    public static function getInstance(){
        if(!isset(self::$instance)){
            try{
                self::$instance = new ConexaoBanco("mysql:host=localhost;dbname=loja;","root","");
            }
                catch (Exception $e){
                    echo 'Erro ao conectar com o Banco'.$e;
                    exit();
                }
        }
        return self::$instance;
    }
}
?>