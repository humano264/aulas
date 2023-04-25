<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../exercicios/cssCentral.css'>
    <script src='main.js'></script>
</head>
<body>
<?php
  $nome = $_POST['nome'];
  $horario = $_POST['horario'];

  $hora = (int) substr($horario, 0, 2);

  if ($hora < 12) {
    $saudacao = "Bom dia";
  } elseif ($hora < 18) {
    $saudacao = "Boa tarde";
  } else {
    $saudacao = "Boa noite";
  }

  echo "<h1>{$saudacao}, {$nome}!</h1>";
?>
</body>
</html>