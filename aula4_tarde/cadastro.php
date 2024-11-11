<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <form action="processa.php" method="post">
        <h1>Cadastro</h1>
        <label for="nome">Nome</label>
        <input type="text" name="nome" placeholder="Nome completo" required><br>
        <label for="usuario">Nome de Usuário</label>
        <input type="text" name="usuario" placeholder="Nome de exibição" required><br>
        <label for="senha">Senha</label>
        <input type="password" name="senha" placeholder="Senha" required><br>
        <label for="senha2">Confirmar Senha</label>
        <input type="password" name="senha2" placeholder="Confirmar senha" required><br>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="nome@nome.com" required><br>
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" placeholder="xxx.xxx.xxx-xx" required><br>
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" placeholder="(xx) xxxxx-xxxx" required><br>
        <label for="altura">Altura</label>
        <input type="text" name="altura" placeholder="x.xx" required><br>
        <label for="peso">Peso</label>
        <input type="text" name="peso" placeholder="xx"><br>
        <input type="submit" name="Enviar">
    </form>
</body>

</html>