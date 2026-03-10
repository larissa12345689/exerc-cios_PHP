<?php
    $valores_brutos = $_GET["valores"];

    $lista_valores = explode(" ", $valores_brutos);

    $contador = 0;

    foreach ($lista_valores as $valor){
        $v = (float)$valor;

        if ($v >= 10 && $v <= 150){
            $contador ++;
        }
    }

    echo "a quantidade de números que estão entre 10 e 150 são: $contador."



    
?>