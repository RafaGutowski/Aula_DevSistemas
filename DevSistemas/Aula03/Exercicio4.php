<form action="" method="GET">

    <label>Digite uma letra:</label>
    <input name="letra" type="text">

    <button type="submit">Enviar</button>
</form>

<?php 

    $letra = $_GET["letra"];

    if(strtoupper($letra) == 'A' || strtoupper($letra) == 'E' || strtoupper($letra) == 'I' || strtoupper($letra) == 'O' || strtoupper($letra) == 'U' ){
        echo "A letra digitada é uma vogal.";
    } else {
        echo "A letra digitada é uma consoante.";
    }

?>