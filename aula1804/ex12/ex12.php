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
$p = $_GET['p'];
$i = $_GET['i'];

while($i >=1){
    echo"<img src='$p/$i.jpg' width=150 e height=100>";
    echo"<br>";
    $i--;
}
?>

</body>
</html>