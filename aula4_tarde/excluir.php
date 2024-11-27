<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $sql = "DELETE FROM usuarios WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: http://localhost/aula4_tarde/");
        exit;
    } else {
        echo "Erro ao excluir: " . $conn->error;
    }
}
?>