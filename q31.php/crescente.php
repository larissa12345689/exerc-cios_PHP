<?php 
$valor1 = $_GET["valor1"];
$valor2 = $_GET["valor2"];
$valor3 = $_GET["valor3"];

$numeros = [$valor1, $valor2, $valor3];

sort($numeros);
echo implode(",", $numeros);


?>