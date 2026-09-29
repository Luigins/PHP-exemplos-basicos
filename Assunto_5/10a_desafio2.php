<!-- Digite sua solução para o desafio (AQUI) -->
<!-- Codigo HTML -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos com Validação</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome" required> <br><br>

        <label for="preço">Preço do Produto:</label>
        <input type="number" id="preco" name="preco" step="0.01" required>  <br><br>

        <button type="submit">Cadastrar Produto</button>

     </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];

        // Validando os dados
        if(empty($nome)) {
            echo "<p style='color: red;> O nome do produto é obrigatório.</p>";
        } elseif (!is_numeric($preco) || $preco <= 0 ) {
            echo "<p style='color: red'>Erro ao cadastrar!</p>";
        } else{
            echo "<p style='color: darkgreen'>Produto cadastrado com sucesso!</p>";
        }

        $servername = "localhost";
        $username = "root";
        $password = "Senai@118";
        $dbname = "exercicio";

        try{
            $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }
    // Insere o registro no BD
    $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')";
    
        } catch (Exception $e) {
            echo "<p style='color: red'>Falha na conexão: " . $e->getMessage() . "</p>";
        }
    }
    ?>

</body>
</html>