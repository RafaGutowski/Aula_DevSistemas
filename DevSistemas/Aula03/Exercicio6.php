<form action="" method="GET">

    <label>Digite o primeiro número:</label>
    <input name="num" type="text">
    <br>
    <label>Digite o segundo número:</label>
    <input name="num1" type="text">
    <br>
    <label>Digite o terceiro número:</label>
    <input name="num2" type="text">

    <button type="submit">Enviar</button>
</form>

<?php 

    $num = $_GET["num"];
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    if($num > $num1 && $num > $num2){
        echo "O maior número digitado é o " . $num;
    } else if($num1 > $num2){
        echo "O maior número digitado é o " . $num1;
    } else {
        echo "O maior número digitado é o " . $num2;
    }

?>