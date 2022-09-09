<div class="titulo">Funções anônimas</div>

<?php

$soma = function ($a, $b){
    return $a + $b;
};

echo $soma(1,2) . '<br>';

function executar(int $a, int $b, string $op, Closure $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

executar(2,3, '+', $soma);

?>