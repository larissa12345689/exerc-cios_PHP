<?php

$idade = $_POST["idade"];
$a = "infantil A";
$b = "infantil B";
$c = "juvenil A";
$d = "juvenil B";
$e = "sênior";

if ($idade >= 5 && $idade <= 7){
    echo "sua turma é: $a";

} elseif ($idade >= 7 && $idade <= 10){
    echo "sua turma é: $b";

} elseif ($idade >= 10 && $idade <= 13){
    echo "sua turma é: $c";

}  elseif ($idade >= 14 && $idade <= 17){
    echo "sua turma é: $d";

} elseif ($idade >= 17 && $idade <= 20){
    echo "sua turma é: $e";

}

?>