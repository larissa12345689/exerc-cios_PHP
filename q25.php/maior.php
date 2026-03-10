<?php
$num1 = $_GET["valor1"];
$num2 = $_GET["valor2"];
$maior = 0;

if ($num1 == $num2){
    echo "os 2 valores são iguais";
} elseif ($num1 != $num2){
    if($num1 > $num2){
        $maior = $num1;
    } else{
        $maior = $num2;
    }
    echo "os seus valores são diferentes e $maior é o maior valor.";
}








?>