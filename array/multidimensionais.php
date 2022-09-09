<div class="titulo">Arrays Multidimensionais</div>

<?php
$dados = [
    [
        "nome" => "Gabriel",
        "idade" => 24,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Sara",
        "idade" => 20,
        "naturalidade" => "Rio Grande do Sul"
    ],
];

print_r($dados);

echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

$dados[] = [
    "nome" => "Rafael",
    "idade" => 2,
    "naturalidade" => "Rio Grande do Sul"
];

echo '<br>';

print_r($dados);

echo '<br>' . $dados[2]['idade'];

$dados[2]['Vizinho'] = "Chaves";

echo '<br>' . print_r($dados);
?>