<div class="titulo">Encapsulamento</div>

<?php

class A
{
    public $publico = "Público";
    protected $protegido = "Protegido";
    private $privado = "Privado";

    public function mostrarA()
    {
        echo "a) Público = {$this->publico}<br>";
        echo "b) Protegido = {$this->protegido}<br>";
        echo "c) Privado = {$this->privado}<br>";
    }

    private function naoMostrar()
    {
        echo 'Não vou imprimir!';
    }
}

$a = new A();
$a->mostrarA();

class B extends A{
    public function mostrarB(){
        
    }
}

?>