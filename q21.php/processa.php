<?php
if (isset($_POST["pessoa"])) {
    $lista = $_POST["pessoa"];
    $aptos = 0;

    foreach ($lista as $linha){

    $info = explode("-", $linha);

    $nome  = $info[0];
    $sexo  = strtoupper($info[1]);
    $idade = $info[2];
    $saude = strtoupper($info[3]);


    if ($sexo == "M" && $idade >=18 && $saude == "B"){
        echo "$nome está apto para servir.";
        $aptos +=1;
    } else {
        echo "$nome está inapto";
    }
}

echo "o total de aptos é: $aptos";

