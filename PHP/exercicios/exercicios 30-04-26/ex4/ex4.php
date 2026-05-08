<?php

$cep = $_POST["cep"];


$link = "https://viacep.com.br/ws/$cep/json/";


$resposta = file_get_contents($link);

// pra converter JSON para array
$dados = json_decode($resposta, true);

echo "<h2>Endereço Encontrado</h2>";

echo "Rua: " . $dados["logradouro"] . "<br><br>";

echo "Bairro: " . $dados["bairro"] . "<br><br>";

echo "Cidade: " . $dados["localidade"] . "<br><br>";

echo "Estado: " . $dados["uf"];

?>