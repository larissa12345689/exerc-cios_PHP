<?php
$n = $_POST["nome"];
$i = $_POST["idade"]; 
$r = $_POST["risco"];   

if($i >=17 && $i <= 70){
    if($i >= 17 && $i <= 20){
        if($r == "b" || $r == "B"){
            echo "sua categoria é: 1";
        } elseif ($r == "m" || $r == "M"){
            echo "sua categoria é: 2";
        }elseif ($r == "a" || $r == "A"){
            echo "sua categoria é: 3";
        }
    } elseif ($i >= 21 && $i <= 24){
        if($r == "b" || $r == "B"){
            echo "sua categoria é: 2";
        } elseif ($r == "m" || $r == "M"){
            echo "sua categoria é: 3";
        }elseif ($r == "a" || $r == "A"){
            echo "sua categoria é: 4";
        }
    } elseif ($i >= 25 && $i <= 34){
        if($r == "b" || $r == "B"){
            echo "sua categoria é: 3";
        } elseif ($r == "m" || $r == "M"){
            echo "sua categoria é: 4";
        }elseif ($r == "a" || $r == "A"){
            echo "sua categoria é: 5";
        }
    } elseif ($i >= 35 && $i <= 64){
        if($r == "b" || $r == "B"){
            echo "sua categoria é: 4";
        } elseif ($r == "m" || $r == "M"){
            echo "sua categoria é: 5";
        }elseif ($r == "a" || $r == "A"){
            echo "sua categoria é: 6";
        }
    } elseif ($i >= 65 && $i <= 70){
        if($r == "b" || $r == "B"){
            echo "sua categoria é: 7";
        } elseif ($r == "m" || $r == "M"){
            echo "sua categoria é: 8";
        }elseif ($r == "a" || $r == "A"){
            echo "sua categoria é: 9";
        }
    }





} else{
    echo "sua idade não pode adiquirir seguro";
}
?>