<?php 
    $num = $_GET["num"];

    if ($num >= 100 && $num <= 200) {
        echo "o seu número está entre 100 e 200 ou é 100 e 200. ";
    } else {
        echo "o seu número não está entre 100 e 200.";
    }

    
?>
