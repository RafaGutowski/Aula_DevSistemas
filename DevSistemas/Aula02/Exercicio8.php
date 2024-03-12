<form action="" method="GET">

    <label for="num">Digite a temperatura em Fahrenheit:</label>
    <input name="num" id="num" type="text">

    <button type="submit">Enviar</button>
</form>

<?php 

 $tempF = $_GET["num"];
 $celsius =5 * ($tempF - 32) / 9;
 
 echo "A temperatura em graus Celsius é: " . number_format($celsius , 1) . "°C";

?>