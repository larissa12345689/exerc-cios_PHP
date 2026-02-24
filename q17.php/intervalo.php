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



    // $nota1 = (float)$lista_notas[0];
    // $nota2 = (float)$lista_notas[1];
    // $nota3 = (float)$lista_notas[2];
    // $nota4 = (float)$lista_notas[3];
    // $nota5 = (float)$lista_notas[4];
    // $nota6 = (float)$lista_notas[6];
    // $nota7 = (float)$lista_notas[7];
    // $nota8 = (float)$lista_notas[8];
    // $nota9 = (float)$lista_notas[9];
    // $nota10 = (float)$lista_notas[10];
    // $nota11 = (float)$lista_notas[11];
    // $nota12 = (float)$lista_notas[12];
    // $nota13 = (float)$lista_notas[13];
    // $nota14 = (float)$lista_notas[14];


    
?>