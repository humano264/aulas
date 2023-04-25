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
    $num1 = $_POST["numero1"];
    $num2 = $_POST["numero2"];
    $op = $_POST["op"];

    if($op == "sm")echo $num1+$num2;
    if($op == "sb")echo $num1-$num2;
    if($op == "dv")echo $num1/$num2;
    if($op == "ml")echo $num1*$num2;
   
?>
</body>
</html>