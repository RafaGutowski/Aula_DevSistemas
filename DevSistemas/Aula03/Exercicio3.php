<form action="" method="GET">

    <label>Digite o sexo do bebê:</label>
    <input name="sexo" type="text">


    <button type="submit">Enviar</button>
</form>

<?php 

    $sexo = $_GET["sexo"];

    switch($sexo){

        case 'F': 
            echo "F - Feminino.";
        break;
        
        case 'M':
            echo "M - Masculino";
        break;
        
        default: 
            echo "Sexo inválido.";
        
    }

?>