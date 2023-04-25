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
    $prontuario = $_POST['prontuario'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $periodo = $_POST['periodo'];
    $modulo = $_POST['modulo'];

    $erros = array();

    if (empty($prontuario)) {
        $erros[] = "Prontuário não pode estar em branco.";
    }

    if (empty($nome)) {
        $erros[] = "Nome não pode estar em branco.";
    }

    if ($idade < 15 || $idade > 75) {
        $erros[] = "Idade deve ser um valor entre 15 e 75 anos.";
    }

    if ($periodo !== 'V' && $periodo !== 'N') {
        $erros[] = "Período deve ser V-Vespertino ou N-Noturno.";
    }

    if ($modulo < 1 || $modulo > 4) {
        $erros[] = "Módulo deve ser um valor entre 1 e 4.";
    }

    if (count($erros) > 0) {
        echo "<ul>";
        foreach ($erros as $erro) {
            echo "<li>{$erro}</li>";
        }
        echo "</ul>";
    } else {
        echo "<h1>Formulário validado com sucesso!</h1>";
    }
    ?>
</body>

</html>