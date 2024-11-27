<?php
include 'config.php';

$usuario = null;
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
    } else {
        die("Usuário não encontrado.");
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="d-flex justify-content-center align-items-center vh-100" style="background-color: #6a0dad;">
    <form action="editar_usuario.php" method="POST" class="p-4 rounded bg-white w-60"
        style="min-height: 100%; min-width: 70%; max-width: 70%;">

        <h2>Editar Usuário</h2>
        <?php if ($usuario): ?>

            <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
            <div class="form-floating mb-3">
                <label id="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= htmlspecialchars($usuario['nome']) ?>" required>
            </div>

            <div class="form-floating mb-3">
                <label id="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($usuario['email']) ?>" required>

            </div>
            <button class="btn btn-outline-primary">Salvar Alterações</button> <a href="logar.php">Voltar para a lista de usuários</a>

        <?php else: ?>
            <p>Usuário não encontrado.</p>
        <?php endif; ?>

    </form>
</body>

</html>