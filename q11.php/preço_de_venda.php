<?php 
    $percentual = $_GET["percentual"];
    $custo = $_GET["custo"];

    $valor_aumento = $custo * $percentual / 100;
    $valor_final = $valor_aumento + $custo;

    echo "o valor final da compra será de: $valor_final."
?>