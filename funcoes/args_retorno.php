<div class="titulo">Argumentos e Retorno</div>

<?php

function obterMensagem($nome, $sobrenome, $mensagem){
    return '<br>' . $nome . $sobrenome . $mensagem;
}


echo obterMensagem("Gabriel", "Francisco", "Seja bem-vindo!");

function soma($a, $b){
    return $a + $b;
}

echo '<br><br>' . soma(7,3);

?>