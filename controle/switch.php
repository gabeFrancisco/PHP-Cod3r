<div class="titulo">Switch</div>

<?php

$categoria = "SUV";
$preco = 0.0;
$carro = '';

switch ($categoria) {
    case 'Luxo':
        $carro = "Mercedes";
        $preco = 250000;
        break;
    case 'SUV':
        $carro = "Renegade";
        $preco = 80000;
        break;
    case 'Sedan':
        $carro = "Jetta";
        $preco = 70000;
        break;
    default:
        $carro = "Onix";
        $preco = 30000;
}

$precoFormatado = number_format($preco, 1, ",", ".");
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";

?>