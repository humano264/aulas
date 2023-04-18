<?php
$nome = $_GET['nome'];
$idade = $_GET['idade'];
echo"<h1>$nome</h1>";
echo"<h2>$idade</h2>";

if($idade < 18){
    echo "<h2> Aluno menor de idade</h2>";
}

else{
    echo "<h2> Aluno maior de idade</h2>";
}
?>


<link rel='stylesheet' type='text/css' media='screen' href='form.css'>
<a href="form.html"></a>