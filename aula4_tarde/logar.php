<?php
include 'config.php';

$sql = "SELECT id, nome, email FROM usuarios";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="d-flex justify-content-center align-items-center vh-100" style="background-color: #6a0dad;">
    <form class="p-4 rounded bg-white w-60" style="min-height: 100%; min-width: 70%; max-width: 70%;">
        <h2>Lista de Usuários</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tbody>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= htmlspecialchars($row['nome']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                            <td>
                                <a href="editar.php?id=<?= $row['id'] ?>">Editar</a>
                                <a href="excluir.php?id=<?= $row['id'] ?>"
                                    onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                            </td>
                        </tr>
                    </tbody>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">Nenhum usuário encontrado.</td>
                </tr>
            <?php endif; ?>
        </table>
        <br>
        <a href="cadastro.php">Cadastrar Novo Usuário</a>
    </form>
</body>

</html>