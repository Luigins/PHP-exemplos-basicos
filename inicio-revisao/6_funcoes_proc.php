<?php

//função simples com retorno
function somar(int $a, int $b): int {
    return $a + $b;
}

// Exibindo o resultado da função
echo somar (4,8);
echo "<br>";

// Procedimento (função sem retorno)
function saudacao($nome = "aluno") {
    echo "Olá, $nome! Seja bem-vindo ao PHP. <br>";
}

// Exibindo a saudação 
saudacao();
saudacao("Luigi");

// Outro procedimento
function mostrarLinha() {
    echo "-------------------------------<br>";
}

mostrarLinha();
?>