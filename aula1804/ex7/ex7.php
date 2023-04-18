<!DOCTYPE html>
<html>
<head>
	<title>Idade em dias</title>
	<link rel='stylesheet' type='text/css' media='screen' href='..\exercicios\cssCentral.css'>
</head>
<body>
	<?php
		$nome = $_POST['nome'];
		$idade = $_POST['idade'];

		$dias_de_vida = $idade * 365;

		echo "<p>$nome tem $dias_de_vida dias de vida.</p>";
	?>
</body>
</html>
