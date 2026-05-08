<?php

$produto = [
    "nome" => "Notebook Gamer",
    "preco" => 9999.99,
    "estoque" => 99
];

echo "Nome: " . $produto["nome"] . "<br>";
echo "Preço: " . number_format($produto["preco"], 2, ",", ".") . "<br>";
echo "Quantidade de estoque: " . $produto["estoque"];

$total = $produto["preco"] * $produto["estoque"];
echo "Preço Total: R$ " . number_format($total, 2, ",", ".");


?>