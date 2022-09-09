<div class="titulo">Laço Foreach</div>

<?php

$array = [
    1 => "Domingo",
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sábado"
];

foreach ($array as $valor){
    echo "$valor <br>";
}

foreach($array as $indice => $valor){
    echo "$indice => $valor <br>";
}

$matrix = [
    ['a', 'b', 'c', 'd', 'e'],
    ['x', 'y', 'z']
];

foreach($matrix as $linha){
    // echo "$linha <br>";
    foreach($linha as $valor){
        echo "$valor";
    }
    echo '<br>';
}

$numeros = [1,2,3,4,5,6,7];

echo "<br>Numeros originais:";
foreach ($numeros as $valor){
    echo " $valor |";
}

$numerosDobrados = [];

foreach($numeros as  $valor){
    array_push($numerosDobrados, $valor * 2);
}

echo "<br>Numeros dobrados:";
foreach ($numerosDobrados as $valor){
    echo " $valor |";
}

echo "<br>Numeros triplicados:";
foreach ($numeros as &$valor){
    $valor *= 3;
    echo " $valor |";
}

print_r($numeros);

?>