<div class="titulo">Construtor & Destrutor</div>

<?php
class Pessoa
{
    public $nome;
    public $idade;

    function __construct(String $_nome, int $_idade)
    {
        $this->nome = $_nome;
        $this->idade = $_idade;
    }

    public function apresentar(){
        echo "<br> nome: {$this->nome} | Idade: {$this->idade}";
    }

    function __destruct()
    {
        echo 'Foi destruido!';
    }
}

$pessoa1 = new Pessoa("Gabriel", 23);
$pessoa1->apresentar();

echo '<br><br>';
var_dump($pessoa1);
unset($pessoa1);
echo '<br><br>';
var_dump($pessoa1);


?>