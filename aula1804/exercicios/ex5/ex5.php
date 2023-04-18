<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cálculo da Área</title>
    <link rel='stylesheet' type='text/css' media='screen' href='..\cssCentral.css'>
</head>
<body>
    <?php
        $comprimento = $_POST['comprimento'];
        $largura = $_POST['largura'];
        $area = $comprimento * $largura;
        echo "<h1>Área do Terreno:</h1>";
        echo "<p>Comprimento: $comprimento m</p>";
        echo "<p>Largura: $largura m</p>";
        echo "<p>Área: $area m²</p>";
    ?>
</body>
</html>
