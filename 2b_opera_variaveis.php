<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simples</title>
</head>
<body>
    <h2>Digite dois números para calcular:</h2>
    
    <!-- O action aponta para o nome do seu arquivo original -->
    <form method="GET" action="2_opera_variaveis.php">
        <label for="numero1">Primeiro Número:</label>
        <input type="number" name="numero1" id="numero1" required><br><br>

        <label for="numero2">Segundo Número:</label>
        <input type="number" name="numero2" id="numero2" required><br><br>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>