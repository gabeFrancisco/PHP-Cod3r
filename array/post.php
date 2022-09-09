<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome" id="">
    <input type="text" name="sobrenome" id="">
    <select name="estado" id="">
        <option value="RS">Rio Grande do Sul</option>
        <option value="SC">Santa Catarina</option>
        <option value="PR">Paraná</option>
    </select>

    <button>Enviar</button>
</form>

<style>
    form > *{
        font-size: 1.8rem;
    }
</style>

<?php

print_r($_POST);

?>