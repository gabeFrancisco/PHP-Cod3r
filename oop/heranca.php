<div class="titulo">Herança</div>

<?php

class Pessoa
{
    public $nome;
    public $idade;

    function __construct(string $_nome, int $_idade)
    {
        $this->nome = $_nome;
        $this->idade = $_idade;
        echo 'Pessoa Criada! <br>';
    }

    function __destruct()
    {
        echo 'Tchau!';
    }

    public function apresentar()
    {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

$pessoa1 = new Pessoa("Gabriel Francisco", 23);
$pessoa1->apresentar();

class Usuario extends Pessoa{
    public $login;
    function __construct(string $_nome, int $_idade, string $_login)
    {
        parent::__construct($_nome, $_idade);
        $this->login = $_login;
        echo "<br>Usuário criado!<br>";
    }

    public function apresentar()
    {
        parent::apresentar();
        echo "{$this->login}<br>";
    }
}

$usuario = new Usuario("Sara", 20, "@saraLimberger");
$usuario->apresentar();

?>