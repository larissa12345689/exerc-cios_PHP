<?php 
    $nome = $_GET["nome"];
    $notas_brutas = $_GET["notas"];

    $lista_notas = explode(" ", $notas_brutas);

    $nota1 = (float)$lista_notas[0];
    $nota2 = (float)$lista_notas[1];
    $nota3 = (float)$lista_notas[2];

    $media = ($nota1 + $nota2 + $nota3) / 3;
    echo "olá $nome, a sua média foi $media ";

    if ($media >= 7) {
        echo "aprovado";
    } elseif ($media <= 5) {
        echo "reprovado";
    } elseif ($media >= 5.1 and $media <=6.9){
        echo "recuperação";
    }
?>