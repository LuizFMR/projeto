<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>

<body class="d-flex justify-content-center align-items-center vh-100" style="background-color: #6a0dad;">
    <form action="" method="post" class="p-4 rounded bg-white w-50">
        <h1>Login</h1>

        <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
            <label>Email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="senha" placeholder="Senha" required>
            <label>Senha</label>
        </div>

        <button class="btn btn-outline-primary">Entrar</button> <a href="cadastro.php">Cadastrar-se</a>

    </form>
</body>

</html>