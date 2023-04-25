<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../exercicios/cssCentral.css''>
    <script src=' main.js'>
    </script>
</head>

<body>

    <?php
    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $frequencia = $_POST['frequencia'];

    $media = ($nota1 + $nota2) / 2;

    echo "<h2>Nome: {$nome}</h2>";
    echo "<h3>Nota 1: {$nota1}</h3>";
    echo "<h3>Nota 2: {$nota2}</h3>";
    echo "<h3>Frequência: {$frequencia}%</h3>";

    if ($media < 5) {
        echo "<h1 style='color: red;'>Reprova por nota</h1>";
    } elseif ($frequencia < 75) {
        echo "<h1 style='color: red;'>Reprova por frequência</h1>";
    } else {
        echo "<h1>Aprovado</h1>";
    }
    ?>
</body>

</html>