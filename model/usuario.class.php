<?php
class Usuario
{
    private $codeUser;
    private $nome;
    private $email;
    private $senha;
    private $idade;
    private $telefone;

    public function __construct(){}

    public function __destruct(){}

    public function __get($atributo)
    {
        return $this->$atributo;
    }
    
    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    function __toString()
    {
        return nl2br(
                     "<hr><h5><p>Nome: $this->nome</p>
                      <p>Email: $this->email</p>
                      <p>Idade: $this->idade </p>
                      <p>Telefone: $this->telefone</p>
                      </h5>"
        );
    }
}
