<?php
$sexo = $_POST["sexo"];
$idade = $_POST["idade"];
$nome = $_POST["nome"];
$altura = $_POST["altura"];

$pesoIdeal = 0;

if ($sexo == "f" || $sexo == "F"){

    if ($altura > 1.50){
        $pesoIdeal = (62.1 * $altura) - 44.7;
        echo "o seu peso ideal é: $pesoIdeal";
    } elseif ($altura <= 1.50){
        if($idade >= 35){
            $pesoIdeal = (62.1 * $altura)- 45;
            echo "o seu peso ideal é: $pesoIdeal";
        } elseif ($idade < 35){
            $pesoIdeal = (62.1*$altura)- 49;
            echo "o seu peso ideal é: $pesoIdeal";
        }
    }

} elseif ($sexo == "m" || $sexo == "M"){
    if ($altura >1.70){
        if ($idade <=20){
            $pesoIdeal = (72.7 * $altura) - 58;
            echo "o seu peso ideal é: $pesoIdeal";
        } elseif ($idade > 20 && $idade < 40){
            $pesoIdeal = (72.7 * $altura)- 53;
            echo "o seu peso ideal é: $pesoIdeal";
        } elseif($idade >= 40){
            $pesoIdeal = (72.7 * $altura)- 45;
            echo "o seu peso ideal é: $pesoIdeal";
        }
    } elseif ($altura <= 1.70){
        if ($idade <= 40){
            $pesoIdeal = (72.7* $altura)-50;
            echo "o seu peso peso ideal é: $pesoIdeal";
        } elseif($idade > 40){
            $pesoIdeal = (72.7* $altura)- 58;
            echo "o seu peso peso ideal é: $pesoIdeal";
        }
    }
}
?>