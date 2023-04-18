<?php
$capitais = array(
    "Acre" => "Rio Branco",
    "Alagoas" => "Maceió",
    "Amapá" => "Macapá",
    "Amazonas" => "Manaus",
    "Bahia" => "Salvador",
    "Ceará" => "Fortaleza",
    "Distrito Federal" => "Brasília",
    "Espírito Santo" => "Vitória",
    "Goiás" => "Goiânia",
    "Maranhão" => "São Luís",
    "Mato Grosso" => "Cuiabá",
    "Mato Grosso do Sul" => "Campo Grande",
    "Minas Gerais" => "Belo Horizonte",
    "Pará" => "Belém",
    "Paraíba" => "João Pessoa",
    "Paraná" => "Curitiba",
    "Pernambuco" => "Recife",
    "Piauí" => "Teresina",
    "Rio de Janeiro" => "Rio de Janeiro",
    "Rio Grande do Norte" => "Natal",
    "Rio Grande do Sul" => "Porto Alegre",
    "Rondônia" => "Porto Velho",
    "Roraima" => "Boa Vista",
    "Santa Catarina" => "Florianópolis",
    "São Paulo" => "São Paulo",
    "Sergipe" => "Aracaju",
    "Tocantins" => "Palmas"
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $estado = $_POST["estado"];
    $capital = $capitais[$estado];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Capitais dos Estados</title>
</head>
<body>
    <form method="post" action="ex3.php">
        <label for="estado">Digite o nome do estado:</label>
        <input type="text" name="estado" id="estado">
        <button type="submit">Buscar</button>
    </form>
    <?php
    if (isset($capital)) {
        echo "<p>A capital do estado de " . $estado . " é " . $capital . ".</p>";
    }
    ?>
</body>
</html>
