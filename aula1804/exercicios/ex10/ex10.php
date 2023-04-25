<!DOCTYPE html>
<html>
<head>
	<title>Calcular2</title>
	<link rel='stylesheet' type='text/css' media='screen' href='../cssCentral.css'>
</head>
<body>
	<?php
		$p = $_POST['p'];
		$m = $_POST['m'];
        $g = $_POST['g'];
        
        $cp = $p * 10;
        $cm = $m * 12;
        $cg = $g * 15;

		echo "<p> Esse homossexual tem $cp camisetas pequenas.</p>";
        echo "<p> Esse homossexual tem $cm camisetas medias.</p>";
        echo "<p> Esse homossexual tem $cg camisetas grandes.</p>";
	?>
</body>
</html>
