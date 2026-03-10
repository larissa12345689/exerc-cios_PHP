<?php
$idades_brutas = $_GET["idades"];

$lista_idades = explode(" ", $idades_brutas);

foreach($lista_idades as $idade){
    $i = (float)$idade;

    if ($i <= 17){
        echo "menor de idade<br>";
    } else {
        echo "maior de idade<br>";
    }
}


?>