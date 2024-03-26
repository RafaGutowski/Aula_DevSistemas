<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Repetição</title>
</head>

<body>

    <h1>--- FOR ---</h1>

    <?php

    for ($i = 0; $i < 10; $i++) :
        echo "<br>Meu for funciona!  ----- Linha: {$i}";
        for ($j = 0; $j < 10; $j++) {
            echo "---- Coluna: {$j} | ";
        }
    endfor;

    ?>

    <h2>-- WHILE --</h2>

    <?php

    $a = 0;
    while ($a < 10) {
        echo "- {$a}";
        $a++;
    } //endwhile; Como feito no exemplo FOR.

    ?>

    <h2>-- DO WHILE --</h2>

    <?php
    $var = 87;
    do {
        echo "<br> Número: " . $var;
        $var += 3;
    } while ($var < 100);
    ?>

    <h2>-- LISTA / ARRAY ---</h2>

    <?php

    //$comidas = array["Batata", "Miojo", "Polenta"];
    $comidas = array("Batata", "Miojo", "Polenta");
    echo print_r($comidas);
    echo "<br>" . $comidas[2];
    echo "<br>";
    $comidas[20] = "Arroz";
    $comidas[] = "30.5";
    $comidas[] = true;
    $comidas[] = "Feijão";
    echo print_r($comidas);

    $totalComida = count($comidas);
    echo "<br> Total: {$totalComida}";

    echo "<h3>Lista de compra: </h3>";
    /*for ($i=0; $i < $totalComida; $i++) { 
            echo "<li> Item: {$i} - " . $comidas[$i];
        }*/
    //Para cada $comida dentro do array $comidas faça:
    foreach ($comidas as $comida) {
        //comidas[i]
        //comida
        echo "<li> Item: - " . $comida;
    }

    echo "<h3>Array com indice str: </h3>";

    $pessoa = array("nome" => "Luan", "idade" => 19, "esta" => "Feliz :)");
    echo $pessoa["nome"];
    echo $pessoa["idade"];
    echo $pessoa["esta"];

        foreach($pessoa as $key => $value){
            echo "<li> {$key} - {$value}";
        }

    echo "<h3>Array de Array: </h3>";
    $varias_pessoas = array(
        array("nome" => "Luan", "idade" => 19, "esta" => "Feli :)"),
        array("nome" => "Maria", "idade" => 23, "esta" => "Cansada :|"),
        array("nome" => "João", "idade" => 17, "esta" => "Triste :(")
    );
    //echo $varias_pessoas;
    echo print_r($varias_pessoas);
    echo "<br><br>";
        for ($i=0; $i < count($varias_pessoas); $i++) { 
            echo "<br> Uma Pessoa";
            //echo print_r($varias_pessoas[$i]);
            foreach ($varias_pessoas[$i] as $key => $value) {
                echo "<li> {$key} - {$value}";
        }
    }
        
    ?>

</body>

</html>