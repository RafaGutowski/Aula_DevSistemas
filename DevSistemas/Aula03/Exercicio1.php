<form action="" method="GET">

    <label>Digite o primeiro número:</label>
    <input name="num" type="text">
    <label>Digite o segundo número:</label>
    <input name="num1" type="text">


    <button type="submit">Enviar</button>
</form>

<?php 

    $num = $_GET["num"];
    $num1 = $_GET["num1"];
    
    if($num > $num1){
        echo "O número $num é o maior número.";
    } else if($num1 > $num){
        echo "O número $num1 é o maior número.";
    }
    
?>