<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Resultado da soma é:</h1>
    </header>
    <main>
        <?php
        $numero = $_GET["numero"] ?? "valor inválido";
        $numero2 = $_GET["numero2"] ?? "valor inválido";
        $soma = $numero + $numero2;
        echo "O resultado de sua soma é:<strong>$soma</strong>";
        ?>
    </main>

    <style>
        h1{
            color: black;
        }
        body{
            background-color: powderblue;
        }
    </style>
    
</body>
</html>