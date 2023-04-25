<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../exercicios/cssCentral.css'>
    <script src='main.js'></script>
</head>


<?php
	$op = $_POST['num'];

    echo "<h1>A tabuada do número escolhido($op) é:</h1>";

    for($i=1;$i<=10;$i++){
        $n = $op*$i;
        echo "<h2>| $i x $op = $n |</h2>";
    }
?>
</body>

</html>