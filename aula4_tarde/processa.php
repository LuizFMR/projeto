<?php

include 'config.php';
    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = ($_POST['senha']);
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];

    $imc = $peso / ($altura * $altura);

    

    $sql = "INSERT INTO usuarios (nome, usuario, senha, email, cpf, telefone, altura, peso, imc) VALUES ('$nome', '$usuario', '$senha', '$email', '$cpf', '$telefone', '$altura', '$peso', '$imc')";
    if ($conn->query($sql) === TRUE) {
        if ($imc < 18.5) { //Abaixo do peso
            header("Location: http://localhost/aula4_tarde/abaixo.php");
            exit();
        } else if ($imc < 25) { //Peso ideal
            header("Location: http://localhost/aula4_tarde/ideal.php");
            exit();
        } else if ($imc < 30) { //Acima do peso
            header("Location: http://localhost/aula4_tarde/acima.php");
            exit();
        } else if ($imc > 30) { //Obesidade
            header("Location: http://localhost/aula4_tarde/obesidade.php");
            exit();
        }

    } else {
        echo "Erro: " . $conn->error;
    }
}