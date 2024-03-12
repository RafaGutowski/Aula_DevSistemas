<form action="" method="GET">

    <label>Digite a primeira nota:</label>
    <input name="num" type="text">
    <br>
    <label>Digite a segunda nota:</label>
    <input name="num1" type="text">
    <br>
    <label>Digite a terceira nota:</label>
    <input name="num2" type="text">

    <button type="submit">Enviar</button>
</form>

<?php 

$valor = $_GET["num"];
$valor1 = $_GET["num1"];
$valor2 = $_GET["num2"];

echo "<br> A média das notas é: " . (($valor + $valor1 + $valor2) / 3); 

?>