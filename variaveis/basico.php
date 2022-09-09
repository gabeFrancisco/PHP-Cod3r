<div class="titulo">Básico sobre variáveis</div>

<?php
//Variaveis começam com o simbolo de $

$numeroA = 13;
echo $numeroA;
var_dump($numeroA);

$a = 3;
$b = 16;
$soma = $a + $b;
echo '<br>' . $soma;
echo '<br>' . isset($soma);
echo '<br> Variável mutavel';
$variavel = 10;
echo '<br>' . $variavel;

$variavel = 'Agora sou uma String';
echo '<br>' . $variavel;

$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var = 'valida';
//$4var = 'invalido';
//$%var = 'invalido';
//$var8% = 'invalido';

//No PHP existe variáveis pré-definidas para serem usadas;

echo '<br>' . $_SERVER;
echo '<br>' . var_dump($_SERVER["HTTP_HOST"]);
