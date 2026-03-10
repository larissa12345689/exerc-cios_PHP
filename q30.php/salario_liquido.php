<?php
$nome = $_POST["nome"];
$idade = $_POST["idade"];
$sexo = $_POST["sexo"];
$salario = $_POST["salario"];

if (strtoupper($sexo) == "M") {
    if ($idade >= 30){
        $salario_final = $salario += 100;
        echo "o seu salario final com o abono de 100,00 rs é: $salario_final";
    } elseif ($idade < 30){
        $salario_final = $salario += 50;
        echo "o seu salario final com o abono de 50,00 rs é: $salario_final";
    }
} elseif (strtoupper($sexo) == "F"){
    if ($idade >= 30){
        $salario_final = $salario += 200;
        echo "o seu salario final com o abono de 200,00 rs é: $salario_final";
    } elseif ($idade < 30){
        $salario_final = $salario += 80;
        echo "o seu salario final com o abono de 80,00 rs é: $salario_final";
    }
} else {
    echo "digite um sexo válido!";
}





?>