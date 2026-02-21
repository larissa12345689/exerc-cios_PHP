<?php 
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    if ($num1 > $num2){
        $maior_valor = $num1;
    } else {
        $maior_valor = $num2;
    }

    echo "O maior valor é $maior_valor";
?>
