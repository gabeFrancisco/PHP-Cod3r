<div class="titulo">Map & Filter</div>

<?php

$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais1 = [];

foreach($notas as $nota){
    if($nota >= 7.0){
        array_push($notasFinais1, $nota);
    }
}

print_r($notasFinais1);

$notasFinais2 = array_map('round', $notas);
print_r($notasFinais2);

$apenasAprovados = [];

foreach($notas as $nota){
    if($nota >= 7.0){
        $apenasAprovados[] = $nota;
    }
}

echo '<br><br>';
print_r($apenasAprovados);

function aprovado($nota){
    return $nota >= 7.0;
}

echo 'gfsdgsdf<br>';
$apenasAprovados2 = array_filter($notas, 'aprovado');
print_r($apenasAprovados2);

?>