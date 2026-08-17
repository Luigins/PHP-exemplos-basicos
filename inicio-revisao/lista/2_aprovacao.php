<?php
$mediaFinal = 7.5;
$quantidadeFaltas = 10;

// operador &&
if ($mediaFinal >= 6.0 && $quantidadeFaltas <= 15) {
    echo "Status: APROVADO (Média: $mediaFinal | Faltas: $quantidadeFaltas)";
} else {
    echo "Status: REPROVADO (Média: $mediaFinal | Faltas: $quantidadeFaltas)";
}
?>