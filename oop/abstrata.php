<div class="titulo">Classe Abstrata</div>

<?php

abstract class Abstrata{
    public abstract function metodo1();
    protected abstract function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata{
    public function metodo1(){
        echo 'Executando método 1<br>';
    }

    abstract public function metodo3();
}

?>