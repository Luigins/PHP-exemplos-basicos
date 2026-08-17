<?php
// notas dos 5 alunos
$notas = [7.5, 8.0, 5.5, 9.0, 6.0];

$soma = 0;
$maiorNota = $notas[0];
$menorNota = $notas[0];

// calcular a soma, maior e menor nota[cite: 1]
foreach ($notas as $nota) {
    $soma += $nota;

    if ($nota > $maiorNota) {
        $maiorNota = $nota;
    }

    if ($nota < $menorNota) {
        $menorNota = $nota;
    }
}

$mediaTurma = $soma / count($notas);

echo "Média da turma: " . number_format($mediaTurma, 2, ',', '.') . "<br>";
echo "Maior nota: $maiorNota<br>";
echo "Menor nota: $menorNota";
?>