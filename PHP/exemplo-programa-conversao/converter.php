<?php

// Verifica se veio via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recebe os dados do formulário
    $temperatura = $_POST["temperatura"];
    $tipo = $_POST["tipo"];

    // Validação básica
    if ($temperatura == "" || $tipo == "") {
        echo "Preencha todos os campos.";
        exit;
    }

    // Conversões
    if ($tipo == "cToF") {
        $resultado = ($temperatura * 9/5) + 32;
        $mensagem = "$temperatura °C equivale a " . number_format($resultado, 2, ",", ".") . " °F";
    }

    elseif ($tipo == "fToC") {
        $resultado = ($temperatura - 32) * 5/9;
        $mensagem = "$temperatura °F equivale a " . number_format($resultado, 2, ",", ".") . " °C";
    }

} else {
    echo "Acesso inválido.";
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

    <h1>Resultado da Conversão</h1>

    <p><strong><?php echo $mensagem; ?></strong></p>

    <br>
    <a href="index.html">← Voltar</a>

</body>
</html>