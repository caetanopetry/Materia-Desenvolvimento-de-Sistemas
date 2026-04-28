<?php
$clientes = [
    ["nome"=>"João", "telefone"=>"9999-9999"],
    ["nome"=>"Maria", "telefone"=>"8888-8888"]
];
/*
    file_put_contents()É  uma função do PHP usada para criar arquivos ou gravar conteúdo em arquivos de forma simples..
*/
file_put_contents("clientes.json", json_encode($clientes));
echo "Arquivo salvo!";
?>