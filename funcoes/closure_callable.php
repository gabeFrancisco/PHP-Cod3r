<div class="titulo">Closure & Callable</div>

<?php

$soma1 = function ($a, $b){
    return $a + $b;
};

echo $soma1(4, 3) . '<br>';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

function soma2($a, $b){
    return $a + $b;
}

echo soma2(4,3) . '<br>';
echo (is_callable('soma2') ? 'Sim' : 'Não') . '<br>';

?>