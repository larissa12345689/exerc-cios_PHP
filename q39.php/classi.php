<?php
$m = $_POST["matricula"];
$n = $_POST["nome"]; 
$a = $_POST["avaliaçao"];                                                    
$t = $_POST["trabalho"];
$e = $_POST["exame"];

$mf = (($t * 2) + ($a * 3) + ($e * 5)) / 10;

if ($mf >= 8 && $mf <=10){
    echo "olá $n, que está matriculado com: $m, a sua nota final é: $mf, e sua classificação é: A";
} elseif ($mf >= 7 && $mf <=7.9){
    echo "olá $n, que está matriculado com: $m, a sua nota final é: $mf, e sua classificação é: B";
} elseif ($mf >= 6 && $mf <=6.9){
    echo "olá $n, que está matriculado com: $m, a sua nota final é: $mf, e sua classificação é: C";
} elseif ($mf >= 5 && $mf <=5.9){
    echo "olá $n, que está matriculado com: $m, a sua nota final é: $mf, e sua classificação é: D";
} elseif ($mf >= 0 && $mf <=4.9){
    echo "olá $n, que está matriculado com: $m, a sua nota final é: $mf, e sua classificação é: R";
}

?>