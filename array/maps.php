<div class="titulo">Maps</div>

<?php

$dados = array(
    "idade" => 23,
    "cor" => "Azul",
    "peso" => 65.7
);

print_r($dados);

echo "<br><br>";

for ($i = 0; $i < sizeof($dados); $i++) {
    echo "{$dados['idade']},";
}

?>