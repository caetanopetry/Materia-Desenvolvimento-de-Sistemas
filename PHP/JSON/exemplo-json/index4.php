<?php
/*Exemplo de leitura de um arquivo JSON e conversão para array em PHP
 file_get_contents() É uma função nativa do PHP usada para ler todo o conteúdo de um arquivo  de uma vez só e devolver esse conteúdo como uma string.
*/

$json = file_get_contents("clientes.json");

$clientes = json_decode($json, true);

foreach ($clientes as $cliente) {
    echo $cliente["nome"] . "<br>";
}
?>