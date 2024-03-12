<form action="" method="GET">

    <label for="num">Digite a temperatura em graus Celsius:</label>
    <input name="num" id="num" type="text">

    <button type="submit">Enviar</button>
</form>

<?php 

    $celsius = $_GET["num"];
    $fahrenheit = (($celsius * 9) / 5) + 32;

    echo "A temperatura em Fahrenheit é: " . number_format($fahrenheit, 1) . "°F";

?>