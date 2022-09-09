<div class="titulo">Valor VS Referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo "<br>$variavelValor";

//Atribuição por Referência 
$variavelReferencia = &$variavel;

echo "<br>$variavel";
echo "<br>$variavelReferencia";

?>