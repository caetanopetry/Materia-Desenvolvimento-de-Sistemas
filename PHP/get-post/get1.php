<?php
if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];
    echo "Olá, $nome!";
} else {
    echo "Informe seu nome na URL. Exemplo: ?nome=João";
}
?>
