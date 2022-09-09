<div class="titulo">Interface</div>

<?php

interface Animal{
    function respirar();
}

interface Felino{
    function miar();
}

class Gato implements Animal, Felino{
    
	/**
	 *
	 * @return mixed
	 */
	function respirar() {
        echo "<br>Irei usar ar!<br>";
	}
	/**
	 *
	 * @return mixed
	 */
	function miar() {
        echo "<br>Irei miar!<br>";
	}
}

$animal1 = new Gato();
$animal1->respirar();
$animal1->miar();

var_dump($animal1 instanceof Gato);
    
?>