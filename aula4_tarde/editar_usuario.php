<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int) $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: logar.php");
        exit();
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}
?>