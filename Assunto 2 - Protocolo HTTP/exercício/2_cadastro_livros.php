<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Livros</title>
</head>
<body>

    <h1>Cadastro de Livros</h1>

    <form method="post" action="">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required><br><br>

        <label for="ano">Ano:</label>
        <input type="text" name="ano" required><br><br>

        <button type="submit">Enviar</button>
    </form>

    <hr>

    <?php

    // Monte seu código PHP (Aqui)

     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //Receber os dados do formulário
        $nome = $_POST['nome'];
        $autor = $_POST['autor'];
        $ano = $_POST['ano'];

        // Status 400: o aluno não preencheu um  campo
        if ($nome == '' || $autor == '' || $ano == '') {
            http_response_code(400);
            echo "<h2>Erro 400: O aluno não preencheu um campo.</h2>";

            //Status 400: idade preenchida,mas não é um número
        } elseif (!is_numeric($ano)) {
            http_response_code(400);
            echo "<h2>Erro 400: Ano preenchido, mas não é um número.</h2>";

        // Status 200: aluno cadastrado com sucesso
        } else {
            http_response_code(200);
            echo "<h2>Livro cadastrado com sucesso!</h2>";
        }
    } else {
        // Status 200: visita normal
        http_response_code(200);
        echo "<h2>Bem-vindo ao cadastro de Livros!</h2>";
        echo "<h3>Preencha o formulário para cadastrar um livro.</h3>";
    }
    ?>

    ?>

</body>
</html>
