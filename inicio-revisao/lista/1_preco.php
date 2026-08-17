<?php

//Variaveis

$preco = 300;
$quantidade = 10;
$desconto = 10;
//Calculo do valor total
$valorTotal = 0;
//função 
if ($preco >= 200) {
    $desconto = $preco * 0.10;
    $valorTotal = $preco - $desconto;
    echo "O valor total é: R$ " . $valorTotal; "<br>";
    }else{
        echo "O desconto da compra é: R$ " . number_format($preco, 2, ',', '.');
    }


