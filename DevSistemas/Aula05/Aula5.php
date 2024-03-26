<?php

declare(strict_types=1);

function nomeBonito()
{
    echo "<p>Testando minha função bonita!</p>";
}

nomeBonito();
nomeBonito();
nomeBonito();
nomeBonito();

function criaTitulo($texto)
{
    echo "<h1>" . $texto . "</h1>";
}

criaTitulo("Título Aula 05 - Funções");

function tituloLegal($texto)
{
    echo "<h2>#########################################</h2>";
    echo "<h2>##" . $texto . "##</h2>";
    echo "<h2>#########################################</h2>";
}

tituloLegal("Calcular Medias");

function calcularMedia($nome, $nota1, $nota2)
{
    $media = ($nota1 + $nota2) / 2;

    if ($media >= 7) {
        echo "<p>O aluno(a) {$nome} foi aprovado com média {$media}</p>";
    } else {
        echo "<p>O aluno(a) {$nome} foi reprovado com média. . . melhor não saber >.< </p>";
    }
}

calcularMedia("João", 9, 4);
calcularMedia("Maria",  6, 10);
calcularMedia("Rafael", 7, 8);

function somar($a, $b)
{
    $soma = $a + $b;
    echo "<li>{$a} +  {$b} = {$soma}";
}

function somarNumeros(...$numeros)
{
    //echo print_r($numeros);
    $soma = 0;
    echo "<li>";

    for ($i = 0; $i < count($numeros); $i++) {
        $soma += $numeros[$i];
        echo $numeros[$i] . "+";
    }
    echo "= {$soma}";
}

echo "Listinha de somas: ";
somar(3, 2);
somar(5,  10);
somar(6,  29);
somar(7,  82);
somar(405,  86);
somar(46,  23);
somar(2,  9);
somar(12,  4);

echo "<br><br>";
somarNumeros(13, 25,  31, 45, 57);

function seila($nome, $numero, $texto, ...$coisas)
{
    echo "<br>";
    //echo print_r($coisas);
    echo var_dump($coisas);
}

seila("Nome", 30, "Texto qualquer", 10, "Outro texto", 5, 19.3, true, false);

tituloLegal("Outras Funções");

$verdadeiro = true;
if ($verdadeiro) {
    function Calcular($nome, $ano)
    {
        $idade = 2024 - $ano;
        echo "<p>O(a) {$nome} tem {$idade} anos.</p>";
    }
}

if ($verdadeiro) {
    Calcular("Gabriel", 2000);
    Calcular("José", 1970);
}

function naoFacoIdeia()
{
    echo "<br> Não sei";
    function queijo()
    {
        echo "<br> Parmesão";
    }
}

naoFacoIdeia();
queijo();

function petersoma(&$num)
{
    $num += 5;
    echo "<br> Num - {$num}";
}

echo "<br><br>";
$var1 = 10;
echo "<br> Var 1 - {$var1}";
petersoma($var1);
echo "<br> Var 1 - {$var1}";

function subtracao($a = 10, $b = 5)
{
    $sub = $a - $b;
    echo "<li> {$a} - {$b} = {$sub}";
}
subtracao();
subtracao(50);
subtracao(74, 4);

echo "<br>";

function divisao(float $num1, float $num2)
{
    echo var_dump($num1);
    echo var_dump($num2);
    $res = $num1 / $num2;
    return $res;
}

//$div = divisao(10, 5);
$div = divisao(40, 5);
echo "Conta: " . $div;

echo "<br><br>";

function comida()
{
    echo "Estou com fome";
}

$fome = "comida";
$fome();

function conta($a, $b, &$resposta){
    $resposta = $a + $b;
}

    $resp = 0;
    conta(33, 5, $resp);
    echo "<br>Resposta: " . $resp;

?>