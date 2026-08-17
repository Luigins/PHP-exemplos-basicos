<?php
$numero = 2;

echo "<strong>Tabuada do $numero:</strong><br>";

// Laço para iterar de 1 a 10
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado<br>";
}
?>