<form action="" method="GET">

    <label>Digite o ano em que você nasceu:</label>
    <input name="ano" type="text">

    <button type="submit">Enviar</button>
</form>

<?php 

    $sexo = $_GET["sexo"];
    echo "<br>Sexo BB: " . $sexo;

    switch($sexo){

        case 'F':

            echo "<br> Você escolheu F - Feminino";
            break;

        case 'M':
            echo "<br> Você escolheu M - Masculino";
            break; 

        default;
            echo "<br> Você digitou um código invalido";
            break;
        
    }

?>