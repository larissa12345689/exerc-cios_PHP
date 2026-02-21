<?php 
    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];
    $nota3 = $_GET["nota3"];

    $soma = $nota1 + $nota2 + $nota3;
    $media = $soma /3;
    echo "Suas notas foram: $nota1, $nota2, $nota3, e sua média foi: $media";


?>