<?php 
    $valor_carro = $_GET["valor"];

    $porcen_distribuidor = $valor_carro * 28 / 100;
    $porcen_impostos = $valor_carro * 45 / 100;

    $valor_real = $valor_carro + $porcen_distribuidor + $porcen_impostos;

    echo "o valor real do seu carro é: $valor_real."

?>