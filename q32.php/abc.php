<?php


$num1 = $_GET["valor1"];
$num2 = $_GET["valor2"];
$caract = $_GET["caract"];

switch($caract){    
    
    case "+":
        echo "soma:"  . ($num1 + $num2);
        break;
    case "-":
        echo "subtração:"  . ($num1 - $num2);
        break;
    case "/":
        if($num2 == 0){
            echo "nao é possivel dividir por 0";
            break;
        } else {
            echo "divisão:" . ($num1 / $num2);
        }
    case "*":
        echo "multiplicação:"  . ($num1 * $num2);
        break;
    default:
        echo "insira um operador valido";
        break;
}
?>