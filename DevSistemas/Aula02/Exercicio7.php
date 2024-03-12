<form action="" method="GET">

    <label>Digite a quantidade de horas tabalhadas por mes:</label>
    <input name="num" type="text">
    <br>
    <label>Digite o seu ganho por hora:</label>
    <input name="num1" type="text">

    <button type="submit">Enviar</button>
</form>
<?php 

    $horasMes = $_GET["num"];
    $DinPorHr = $_GET["num1"];

    echo "O total do seu salario é: " . $horasMes * $DinPorHr;

?>