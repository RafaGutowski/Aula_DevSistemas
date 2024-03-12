<form action="" method="GET">

    <label>Digite a sua altura:</label>
    <input name="num" type="text">

    <button type="submit">Enviar</button>
</form>
<?php 

    $altura = $_GET["num"];
    $PesoH = (72.7*$altura) - 58;
    $PesoM = (62.1*$altura) - 44.7;

    echo "<br> O peso ideal para homens com essa altura é: " . number_format($PesoH, 1) . " Kg";
    echo "<br> O peso ideal para mulheres com essa altura é: " . number_format($PesoM, 1) . " Kg";

?>