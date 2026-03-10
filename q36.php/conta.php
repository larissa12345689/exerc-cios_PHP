<?php
$num = $_POST["num"];
$consumo = $_POST["consumo"];

if ($num == 1){
    $total = $consumo * 0.60;
    echo "a conta de sua residência será: $total";
} elseif ($num == 2){
    $total = $consumo * 0.48;
    echo "a conta de seu comercio será: $total";
} elseif ($num == 3){
    $total = $consumo * 1.29;
    echo "a conta de sua industria será: $total";
}
?>