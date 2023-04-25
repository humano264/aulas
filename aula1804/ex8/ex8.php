<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../exercicios/cssCentral.css'>
    <script src='main.js'></script>
</head>


<?php
	for ($i=0; $i<=10; $i++) {
					echo '<option value="'.$i.'">'.$i.'</option>';
				}
                if ($_POST) {
                    $numero = $_POST['numero'];
                    echo '<h2>Tabuada do '.$numero.'</h2>';
                    echo '<table border="1">';
                    for ($i=1; $i<=10; $i++) {
                        echo '<tr><td>'.$numero.' x '.$i.'</td><td>'.($numero*$i).'</td></tr>';
                    }
                    echo '</table>';
                }
?>
</body>

</html>