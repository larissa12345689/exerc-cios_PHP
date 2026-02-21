<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $nome = $_GET["nome"];
        $salario = $_GET["salário"];
        $vendas = $_GET["vendas"];
    
        $porcentagem = 15;
        $aumento = $vendas * $porcentagem / 100;
        $salario_final = $salario + $aumento;
        echo "olá $nome, o seu salário fixo é de: $salario, mas o seu salário final é de: $salario_final."

    ?>
</body>
</html>