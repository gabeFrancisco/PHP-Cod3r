<div class="titulo">Desafio Equação</div>

<?php

echo '<br> <h2>Vamos resolver uma equação, respeitando a ordem de precedência correta.</h2>';

$numA = (6 * (3 + 2)) ** 2;
$denA = 3 * 2;
$numB = (1 - 5) * (2 - 7);
$denB = 2;

echo '<br> Primeira parte do cálculo: <br>';
echo '<br>$numA: ' . $numA;
echo '<br>$denA: ' . $denA;
echo '<br>$numB: ' . $numB;
echo '<br>$denB: ' . $denB;

echo '<br><br>Agora precisamos elevar para a potencia 2 os valores de $numB e $denB';

$numB = $numB ** 2;
$denB = $denB ** 2;

echo '<br><br>$numB: ' . $numB;
echo '<br>$denB: ' . $denB;

echo '<br>Agora vamos juntar as dusa frações que ficarão:';
echo '<br><br>' . $numA . ' / ' . $denA;
echo '<br>' . $numB . ' / ' . $denB;

echo '<br>Neste momento vamos resolver as divisões:';

$superior = ($numA - $denA) ** 3;
$inferior = ($numB - $denB) ** 3;

$final = $superior/$inferior;
echo '<br><br>O resultado é ' . $final;


