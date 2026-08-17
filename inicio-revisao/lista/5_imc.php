<?php
// Função para calcular e retornar o IMC
function calcularIMC($peso, $altura) { 
    return $peso / ($altura * $altura);
}

// Programa principal
$pesoTeste = 75.0;
$alturaTeste = 1.75;

$imc = calcularIMC($pesoTeste, $alturaTeste);

// Estrutura condicional para classificação do IMC
if ($imc < 18.5) {
    $classificacao = "Abaixo do peso";
} elseif ($imc <= 24.9) {
    $classificacao = "Peso normal";
} elseif ($imc <= 29.9) {
    $classificacao = "Sobrepeso";
} else {
    $classificacao = "Obesidade";
}

echo "IMC: " . number_format($imc, 2, ',', '.') . "<br>";
echo "Classificação: $classificacao";
?>