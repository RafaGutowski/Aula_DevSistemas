<form action="" method="GET">

    <label for="num">Digite um número:</label>
    <input name="num" id="num" type="text">

    <button type="submit">Enviar</button>
</form>

<?php 

$metros = $_GET["num"];

echo $metros . " Metros são " . $metros * 100 . " centimetros";

?>