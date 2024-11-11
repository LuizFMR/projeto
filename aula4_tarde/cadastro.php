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
        Nome <input type="text" name="nome" required><br>
        Nome de Usuário <input type="text" name="usuario" required><br>
        Senha <input type="password" name="senha" required><br>
        Confirmar Senha <input type="password" required><br>
        Email <input type="email" name="email" required><br>
        CPF <input type="text" name="cpf" required><br>
        Telefone <input type="text" name="telefone" required><br>
        Altura <input type="text" name="altura"><br>
        Peso <input type="text" name="peso"><br>
        <input type="submit" name="Enviar">
    </form>
</body>

</html>