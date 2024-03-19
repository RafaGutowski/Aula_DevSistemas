<form action="" method="GET">

    <label>Digite o primeiro número:</label>
    <input name="num" type="text">

    <button type="submit">Enviar</button>
</form>

<?php 

    $valor = $_GET["num"];

    if($valor>0){
        echo "O número é positivo.";
    } else {
        echo "O número é negativo.";
    }

?>