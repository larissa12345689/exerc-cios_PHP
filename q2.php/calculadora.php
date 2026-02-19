<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>
<body>
    <header>
        <h1>O resultado é:</h1>
    </header>
    <?php 
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];

    $soma = $numero1 + $numero2;
    $multiplicação = $numero1 * $numero2;
    $divisão = $numero1 / $numero2;
    $subtração = $numero1 - $numero2;

    echo "<strong>SOMA =</strong> $soma <br>";
    echo "<strong>MULTIPLICAÇÃO =</strong> $multiplicação <br>";
    echo "<strong>DIVISÃO =</strong> $divisão <br>";
    echo "<strong>SUBTRAÇÃO =</strong> $subtração;<br> "
    ?>
    
</body>
</html>