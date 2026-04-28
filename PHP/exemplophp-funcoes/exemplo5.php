<?php

// 1 - sem parâmetro / sem retorno
function linha() {
    echo "<hr>";
}

// 2 - com parâmetro / sem retorno
function apresentar($nome) {
    echo "Meu nome é $nome <br>";
}

// 3 - sem parâmetro / com retorno
function piValor() {
    return 3.14;
}

// 4 - com parâmetro / com retorno
function multiplicar($x, $y) {
    return $x * $y;
}

// usando todas
linha();
apresentar("Maria");

$pi = piValor();
echo "Valor de PI: $pi <br>";

$res = multiplicar(4, 5);
echo "Multiplicação: $res";

?>