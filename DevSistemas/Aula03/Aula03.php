<form action="" method="GET">

    <label for="num">Digite um número:</label>
    <input name="num" id="num" type="text">

    <button type="submit">Enviar</button>
</form>

<?php 

$numero_digitado = $_GET["num"];

echo "<br>$numero_digitado";

echo "<br>";

echo "<h3> Funções Uteis <h3>";
echo "<br>ABS - Modulo: " . abs($numero_digitado);
echo "<br>Potencia: " . pow($numero_digitado, 4);
echo "<br>Raiz quadrada: " . sqrt($numero_digitado);

echo "<br>Arredondar: " . round($numero_digitado);
echo "<br>Arredondar p/ baixo: " . ceil($numero_digitado);
echo "<br>Arredondar p/ cima: " . floor($numero_digitado);
echo "<br>Parte inteira: " . intval($numero_digitado);

echo "</p>";

echo "<h3> Mini Matematica <h3>";

$a = 4;
$b = 5;
$c = $a + $b;

$c = $c + 5;
$c += 5;

$b = $b + $a;
$b += $a;

$a = $a + 1;
$a += 1;
$a++;

$b = $b - 1;
$b -= 1;
$b--;

$a++;
++$a;

$b--;
--$b;

$b = 1999;
echo "<br>Valor: " . --$b;
echo "<br>Valor: " . $b;

$var = "janela";

$$var = 10;
// $janela = 10

echo "<br>";
echo "<br> - " . $var;
echo "<br> - " . $$var;
?>