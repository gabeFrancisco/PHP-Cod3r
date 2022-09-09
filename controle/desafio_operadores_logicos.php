<div class="titulo">Desafio Operadores Lógicos</div>

<!--
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50" e Sorvete
    - Se apenas um for executado -> Tv 32" e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<form action="" method="post">
    <div class="field">
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">k
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div class="field">
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    form{
        display: flex;
        flex-direction: column;
        align-items: start;
        text-align: justify;
    }

    .field{
        margin: 15px;
    }

    button{
        margin: 15px;
        padding: 10px 30px;
        border: none;
        border-radius: 7px;
        color: white;
        background-color: #4967ab;
        font-size: 20px;
    }
    button:hover{
        background-color: #344878;
    }

    button:active{
        scale: 1.05;
        background-color: #a65050;
    }

</style>

<?php

$t1 = $_POST['t1'];
$t2 = $_POST['t2'];

$result = "Jesus te ama!";

if($t1 == 1 && $t2 == 1){
    $result = "TV 50'' e Sorvete! Divirtam-se!";
}
else if($t1 == 1 || $t2 == 1){
    $result = "Tv 32'' e Sorvete! Divirtam-se também!";
}
else if(!$t1 && !$t2){
    $result = "Fica em casa porque é mais saudável!";
}

echo $result;

?>
