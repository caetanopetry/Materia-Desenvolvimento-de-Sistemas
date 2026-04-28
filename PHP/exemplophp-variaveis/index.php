<?php

// Variáveis de diferentes tipos
$nome = "Maria";        // string
$idade = 30;            // int
$altura = 1.65;         // float
$estadoCivil = true;       // boolean

// Convertendo boolean para texto (true/false)
$textoEstadoCivil = $estadoCivil ? "Sim" : "Não";

// Concatenando tudo em uma frase
$mensagem = "Nome: " . $nome .
            " | Idade: " . $idade .
            " anos | Altura: " . $altura . " m" .
            " | Casada ? " . $textoEstadoCivil;

// Exibindo na tela
echo $mensagem;

?>