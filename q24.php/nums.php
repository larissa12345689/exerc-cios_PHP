<?php
$dados = $_GET["nums"];
$lista_nums = explode(",",$dados);

foreach($lista_nums as $num){
    if($num > 0){
        echo "$num-positivo"; ?> <br> <?php
    } elseif ($num < 0 ){
        echo "$num-negativo";?> <br> <?php
    } elseif ($num == 0){
        echo "$num-zero";?> <br> <?php
    }
}











?>