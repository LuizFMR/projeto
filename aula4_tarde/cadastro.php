<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body class="d-flex justify-content-center align-items-center vh-100" style="background-color: #6a0dad;">



    <form action="processa.php" method="post" class="p-4 rounded bg-white w-50">

        <div class="mb-3">
            <h1>Cadastro</h1>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                <label>Nome</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="usuario" placeholder="Nome de Usuário" required>
                <label>Nome do Usuário</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                <label>Senha</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="senha2" placeholder="Confirmar Senha" required>
                <label>Confirmar Senha</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
                <label>Email</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="cpf" placeholder="CPF" required>
                <label>CPF</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="telefone" placeholder="Telefone" required>
                <label>Telefone</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="altura" placeholder="Altura" required>
                <label>Altura</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="peso" placeholder="Peso" required>
                <label>Peso</label>
            </div>

            <button class="btn btn-outline-primary">Cadastrar</button>
        </div>

    </form>



</body>

</html>