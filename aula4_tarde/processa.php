<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];

    $imc = $peso / ($altura * $altura);

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

    function validarCPF($cpf)
    {
        $cpf = preg_replace('/\D/', '', $cpf);

        if (strlen($cpf) != 11) {
            return false;
        }


        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        return true;
    }
}