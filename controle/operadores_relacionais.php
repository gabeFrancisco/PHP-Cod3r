<div class="titulo">Operadores Relacionais</div>

<?php

$expressao = "Jesus te ama!";

// var_dump(1 == 1);
// var_dump(1 > 1);
// var_dump(1 >= 1);
// var_dump(1 <> 1);
// var_dump(1 != 1);
// var_dump(1 === 1);

$condicao = 2;
if($condicao == 1){
    echo "A informação da variável e: {$expressao}";
}
else if($condicao == 2){
    echo '<div style="color: blue">' . "A informação da variável e: {$expressao}";
}
else{
    echo "A expressao é 0!";
}


