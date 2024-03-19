<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Repetição</title>
</head>

<body>

    <h1>--- FOR ---</h1>

    <?php 
    
    for($i = 0; $i <10; $i++):
        echo "<br>Meu for funciona!  ----- Linha: {$i}";
        for($j = 0; $j <10; $j++){
            echo "---- Coluna: {$j} | ";
        }
    endfor;
    
    ?>

    <h2>-- WHILE --</h2>

    <?php 
        
        $a = 0;
        while($a < 10){
            echo "- {$a}";
            $a++;
        } //endwhile; Como feito no exemplo FOR.
    
    ?>

    <h2>-- DO WHILE --</h2>

    <?php 
        $var = 87;
        do{
            echo "<br> Número: " . $var;
            $var += 3;  
        }while($var < 100);
    ?>

    <h2>--- LISTA / ARRAY ---</h2>

    <?php 

        

?>

</body>

</html>