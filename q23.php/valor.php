<?php
$num = $_GET["num"];

if ($num > 80){
    echo "o seu número é maior que 80";
} elseif ($num < 25){
    echo "o seu número é menor 25";
}elseif ($num == 40){
    echo "o seu numero é 40";
} else {
    echo "o seu valor não se encaixa nas normas";
}




?>