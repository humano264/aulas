<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../exercicios/cssCentral.css'>
    <script src=' main.js'>
    </script>
</head>
<body>
<?php
  $ano = $_POST['ano'];

  if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "<h1>{$ano} é um ano bissexto!</h1>";
  } else {
    echo "<h1>{$ano} não é um ano bissexto!</h1>";
  }
?>
</body>
</html>