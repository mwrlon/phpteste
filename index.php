<?php

// $nome = "Marlon";
// $idade = 18;
// $altura = 1.83;
// $ativo = true;
// $data = date("d/m/Y H:i:s");

// echo "Olá Mundo!";
// echo "<br>";
// echo $altura;
// echo "<br>";

// if ($idade == 18){
//     echo "Você deve se alistar nesse ano!";
// } elseif ($idade < 18){
//     echo "Você ainda é menor de idade";
// } else{
//     echo "Seu tempo de alistamento ja passou";
// }


// echo "<h2>Olá, $nome!</h2>";

// $a = 7;
// $b = 8;
// $soma = $a + $b;
// $subtracao = $a - $b;
// $multiplicacao = $a * $b;
// $divisao = $a / $b;

// echo "<h3>Soma</h3>";
// echo "$soma";
// echo "<br>";
// echo "<h3>Subtração</h3>";
// echo "$subtracao";
// echo "<br>";
// echo "<h3>Multiplicação</h3>";
// echo "$multiplicacao";
// echo "<br>";
// echo "<h3>Divisão</h3>";
// echo "$divisao";

// echo "<h1>FOR</h1>";

// for ($i = 0; $i <= 10; $i++){
//     echo $i;
//     echo "<br>";
// };

// echo "<h1>WHILE</h1>";

// $j = 0;

// while ($j <= 10){
//     echo $j;
//     echo "<br>";
//     $j++;
// };

echo "<h1>EXERCICIO 1</h1>";

$idade = 17;

if ($idade >= 18){
    echo "Maior de idade";
}else{
    echo "Menor de idade";
}

echo "<h1>EXERCICIO 2</h1>";

$numero = 4;

if ($numero % 2 == 0){
    echo "Par";
}else{
    echo "Impar";
}

echo "<h1>EXERCICIO 3</h1>";

$contador = 10;

while ($contador > 0){
    echo $contador;
    $contador--;
    echo "<br>";
}
echo "Fogo!";

echo "<h1>EXERCICIO 4</h1>";

$numero = 8;

for ($i = 0; $i <= 10; $i++){
    $multiplicacao = $numero * $i;
    echo "$numero x $i = $multiplicacao";
    echo "<br>";
}

echo "<h1>EXERCICIO 5</h1>";

$soma = 0;

for ($i = 1; $i <= 100; $i++){
    $soma += $i;
}

echo "$soma";

$frutas = ["Maça", "Banana", "Laranja"];
echo $frutas[0];
echo "<br>";

foreach ($frutas as $fruta){
    echo $fruta;
    echo "<br>";
}




