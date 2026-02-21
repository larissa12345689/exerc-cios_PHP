<?php 
    $valorA = $_GET["valorA"];
    $valorB = $_GET["valorB"];

    $valorC = $valorA;
    $valorA = $valorB;
    $valorB = $valorC;

    echo "os valores invertidos são: A = <strong>$valorA</strong> e B = <strong>$valorB</strong>."

?>