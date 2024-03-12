<form action="" method="GET">

    <label>Digite o primeiro número:</label>
    <input name="num" type="text">
    <br>
    <label>Digite o segundo número:</label>
    <input name="num1" type="text">

    <button type="submit">Enviar</button>
</form>


<?php 

$valor = $_GET["num"];
$valor1 = $_GET["num1"];

echo "<br> A soma dos valores é: " . ($valor + $valor1);

?>