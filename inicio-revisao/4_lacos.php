<?php

// Laço FOR - Exemplo aplicado em Tabuada
for ($i =  1; $i <= 10; $i++){
echo "8 x $i = " . (8 * $i) . "<br>";
}

// WHILE - (Enquanto) Contagem regressiva
echo "<br>";
$n = 8;
while ($n > 0) {
    echo "$n <br>";
    $n--;
}

// Do While - (Faça enquanto) Executa ao menos 1 vez
echo "<br>";
$j = 0;
do {
    echo "j vale: $j <br>";
    $j++;
} while ($j <= 10);
?>