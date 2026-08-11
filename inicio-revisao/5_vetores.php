<?php

// Vetor (array simples - "1 linha")
$frutas = ["Banana", "Maçã", "Uva", "Pera", "Melancia"];

// Exibindo os valores com laço
foreach ($frutas as $indice => $fruta) {
    echo "Posição $indice: $fruta <br>";
}

// Arrays (Linhas e colunas)

$matriz = [
    ["Max Verstappen", "Oscar piastri", "Sergio Perez"],
    ["Lewis Hamilton", "Fernando Alonso", "Gabriel Bortoleto"],
    ["Charles Leclerc", "Carlos Sainz", "Lando Norris"]
];

echo "<br><br>";
echo "Lista de pilotos de F1 (Dica: O 1º é o melhor.) <br><br>";

// Exibindo os valores da matriz
foreach ($matriz as $linha) {
    foreach ($linha as $piloto) {
        echo $piloto . " |";
    }
    echo "<br>";
}

?>