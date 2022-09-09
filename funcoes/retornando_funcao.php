<div class="titulo">Retornando Função</div>

<?php

function soma($a){
    return function($b) use ($a){
        return $a + $b;
    };
}

echo soma(4)(3);

$doisMais = soma(7);
echo '<br>', $doisMais(10);
echo '<br>', $doisMais(18);

?>