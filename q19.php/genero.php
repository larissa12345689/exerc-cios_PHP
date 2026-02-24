<?php
$dados_brutos = $_GET["dados"];

$lista_dados = explode(",", $dados_brutos); //separa tudo da vírgula

$homens = 0;
$mulheres = 0;

foreach($lista_dados as $item){
    $detalhes = explode("-", trim($item));     //separa tudo do ífem, trim serve para tirar espaços extras

    if (count($detalhes)== 2){    //count faz a mesma funçao do len, conta quantos elementos tem em detalhes que recebe todos os itens da lista
        $nome = $detalhes[0];
        $sexo = strtoupper($detalhes[1]);   // transforma em MAIÚSCULO
    }

    if ($sexo == "M"){
        echo "nome:$nome - Sexo: Homem<br>";
    } elseif ($sexo == "F") {
        echo "Nome: $nome - Sexo: Mulher <br>";
    } else {
        echo "Nome: $nome - Sexo: Inválido (Use M ou F) <br>";
    }
}

?>