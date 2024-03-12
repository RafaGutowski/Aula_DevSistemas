<form action="" method="GET">

    <label>Digite o ano em que você nasceu:</label>
    <input name="ano" type="text">

    <button type="submit">Enviar</button>
</form>

</form>

<?php 

$ano = $_GET["ano"];
$idade = 2024 - $ano;

if($idade >= 18 && $idade < 70){
    echo "Você tem {$idade} anos e deve votar!";
}else if(($idade > 16 && $idade < 18) || $idade < 70){
        echo "Você pode votar, mas não pode dirigir";
} else {

    echo "Você tem não pode votar!";
    
}

?>