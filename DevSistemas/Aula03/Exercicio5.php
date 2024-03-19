<form action="" method="GET">

    <label>Digite a primeira:</label>
    <input name="nota1" type="text">
    <br>
    <label>Digite a segunda nota:</label>
    <input name="nota2" type="text">

    <button type="submit">Enviar</button>
</form>

<?php 

   $nota1 = $_GET["nota1"];
   $nota2 = $_GET["nota2"];
   $notaF = ($nota1 + $nota2) / 2;

   if($notaF == 10){
        echo "Aprovado com distinção.";
   } else if($notaF < 7){
        echo "Reprovado.";
   } else if($notaF>=7){
        echo "Aprovado.";
   }

?>