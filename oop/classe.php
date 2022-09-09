<div class="titulo">Primeira Classe</div>

<?php

class Cliente
{
    public $nome = 'Anônimo';
    public $idade = 23;

    public function apresentar(){
        echo "<br> nome: {$this->nome} | Idade: {$this->idade}";
    }
}

$cliente1 = new Cliente();
$cliente1->nome = "Gabriel";
$cliente1->apresentar();

$cliente2 = new Cliente();
$cliente2->nome = "Jesus";
$cliente2->idade = 1000000000000000;
$cliente2->apresentar();

?>