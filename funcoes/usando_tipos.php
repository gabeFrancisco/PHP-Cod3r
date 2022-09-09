<div class="titulo">Usando Tipos</div>

<?php
function somar1(int $a, int $b)
{
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar1(3, 7) . '<br>';
echo somar1(3.7, 7.3) . '<br>';

function somar2($a, $b): int {
    return $a + $b;
}
?>