<?php
$nivel = $_GET["nivel"];
$hora = $_GET["hora"];



if ($nivel == 1){
    $salario = $hora * 12;
} elseif ($nivel == 2){
    $salario = $hora * 17;
}elseif ($nivel == 3){
    $salario = $hora * 25;
}
echo "o seu salário será de $salario";

?>