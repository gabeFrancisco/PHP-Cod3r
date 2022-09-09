<div class="titulo">Básico de Array</div>

<?php

$lista = array(1, 2, 3, 4, 5, 6, 7);
for ($i = 0; $i < sizeof($lista); $i++) {
    echo "{$lista[$i]},";
}

$lista[0] = 12;



echo "<br>";

print_r($lista);

?>