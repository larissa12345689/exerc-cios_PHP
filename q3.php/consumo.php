<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>O consumo médio é:</h1>
    </header>
    <main>
        <?php 
        $gasolina = $_GET["consumido"];
        $distancia = $_GET["distancia"];
        $consumo = $gasolina + $distancia;
        $media = $consumo / 2;
        echo $media;
        ?>
    </main>
</body>
</html>