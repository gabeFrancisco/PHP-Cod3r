<div class="titulo">Membros Estáticos</div>

<?php

class A {
    public $naoStatic = 'Variável de Instância';
    public static $static = "Variável de classe (estática)";

    public function mostrarA(){
        echo "Não estática = {$this->naoStatic}<br>";
        echo "Estática = " . self::$static . '<br>';
    }

    public static function mostrarStaticA() {
        // echo "Não estática = {$this->naoStatic}<br>";
        echo "<br>Método Estático = " . self::$static . '<br>';
    }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA();

echo "Estática = " . A::$static;
unset($objetoA);

A::mostrarStaticA();

?>