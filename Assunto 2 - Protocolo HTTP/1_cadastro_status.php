<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Status Codes</title>
</head>
<body>
    <h1>Cadastro de alunos (com Status Codes)</h1>

    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome"
         required><br><br>

        <label for="idade">Idade:</label>
        <input type="text" name="idade" required><br><br>

        <button type="submit">Enviar</button>
    </form>

    <hr>
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Trata chaves inexistentes com '??' e remove espaços nas pontas com trim()
    $nome = trim($_POST['nome'] ?? '');
    $idade = trim($_POST['idade'] ?? '');

    // Status 400: o aluno não preencheu um campo
    if ($nome === '' || $idade === '') {
        http_response_code(400);
        echo "<h2>Erro 400: O aluno não preencheu um campo.</h2>";

    // Status 400: idade preenchida, mas não é um número
    } elseif (!is_numeric($idade)) {
        http_response_code(400);
        echo "<h2>Erro 400: Idade preenchida, mas não é um número.</h2>";

    // Status 200: aluno cadastrado com sucesso
    } else {
        http_response_code(200);
        echo "<h2>Aluno cadastrado com sucesso!</h2>";
    }
} else {
    // Status 200: visita normal
    http_response_code(200);
    echo "<h2>Bem-vindo ao cadastro de alunos!</h2>";
    echo "<h3>Preencha o formulário para cadastrar um aluno.</h3>";
}
?>
</body>
</html>