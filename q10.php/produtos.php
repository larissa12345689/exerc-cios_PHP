<?php  
    $valorCompra = $_GET["valorCOMPRA"];
    $prestaçoes = $valorCompra / 5;
    echo "a sua compra com 5 prestações sem juros sairá por: $prestaçoes R$.";

?>