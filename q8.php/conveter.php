<?php  
    $cotação = $_GET["cotação"];
    $quantidade = $_GET["Quantidade"];

    $valorREAL = $quantidade * $cotação;
    echo "Com a cotação de: $cotação,e a quantidade disponível de dólares sendo: $quantidade, o valor em reais é de: $valorREAL."
?>