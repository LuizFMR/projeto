<?php
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