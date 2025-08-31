<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Tela De Cadastro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/cadastrar.css">
</head>
<body>
  <div class="container">
    <h2>Cadastro</h2>
    <form action="cadastro.php" method="POST">
      <div class="form-group">
        <label for="rm">RM</label>
        <input type="text" id="rm" name="rm" required>
      </div>
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" pattern="\d{11}" title="Digite apenas os 11 números do CPF" required>
      </div>
      <button type="submit">Cadastrar</button>
    </form>
  </div>
</body>
</html>
