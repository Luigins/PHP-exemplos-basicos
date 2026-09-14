<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <!-- Formulario de cadastro -->
     <form method="post" action="">

     <!-- Campo de nome -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

    <!-- Campo senha -->
     <label for="senha">Senha:</label>
        <input type="password" name="senha" maxlength="8" required>

    <!-- Botão de cadastro -->
        <button type="submit">Cadastro de usuário</button>

     </form>


     <!-- Logica para gravar as informações -->

      <?php

    //   Verifica se o formulário foi enviado e verificar se as informações vieram do front-end

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Captura os valores enviados do front-end
          $nome = $_POST['nome'];
          $senha = $_POST['senha'];

          // LOGICA PARA GUARDAR OS DADOS EM arquivo TXT

        //   O fopen significa "file open" ou abrir arquivo, e a letra "a" significa "aapend" ou acrescentar.
        // Um exemplo mais simples e que é só tirar o 'F' de fopen que ai aparece a palavra open que é abrir

          // Cria uma linha pra guardar o nome e senha
          $arquivo = fopen('usuarios.txt', 'a');

          $linha = $nome . ';' . $senha . "\n";

          // Escreve a linha no arquivo
        //   Fwrite significa "file write" ou escrever arquivo, e o $linha é a linha que vai ser escrita no arquivo
          fwrite($arquivo, $linha);

          // Fecha o arquivo
        //   Fclose significa "file close" ou fechar arquivo, e o $arquivo é o arquivo que vai ser fechado
          fclose($arquivo);

        //   Mensagem de sucesso para o usuário
          echo "<p>Usuário cadastrado com sucesso!</p>";

        // Mensagem de erro para mais que 8 caracteres na senha
          if (strlen($senha) > 8) {
            echo "<p>Erro: A senha deve ter no máximo 8 caracteres.</p>";
          }
      }
      ?>
</body>
</html>