<div class="titulo">Função & Escopo</div>

<?php
function mostrarMensagem(){
    echo "Olá!";
    echo " Até a próxima!<br>";
}

mostrarMensagem();

$variavel = 1;
function trocaValor(){
    $variavel = 2;
    echo "<br> $variavel";
}

trocaValor();
echo '<br>' . $variavel;

function trocaValorDeVerdade(){
    global $variavel;
    $variavel = 3;
}

echo '<br>' . $variavel;

trocaValorDeVerdade();

echo '<br>' . $variavel;

var_dump(trocaValorDeVerdade())

?>