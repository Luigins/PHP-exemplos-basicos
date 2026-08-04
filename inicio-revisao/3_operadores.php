<?php

// Declarando as variaveis
$idade = 19;
$temDocumento = true;

// COndicional com operador (E)
if ($idade >=18 && $temDocumento) {
    echo "Pode tirar carteira de motorista!";
} else {
    echo "Não pode tirar carteira de motorista.";
}

//Declaração de variáveis
$feriado = false;
$fimDeSemana = true;

// Condicional com operador (OU)
if ($feriado || $fimDeSemana) {
    echo " \n Hoje não tem aula";
} else {
    echo " \n Não é feriado";
}
?>