<form action="" method="GET">

    <label for="num">Digite a área do quadrado:</label>
    <input name="num" id="num" type="text">

    <button type="submit">Enviar</button>
</form>

<?php 

$lado = $_GET["num"];

echo "O dobro da área do quadrado é: " . pow($lado, 2) * 2;

?>