<?php

$arquivo = "usuarios.json";

if ($_POST["acao"] == "salvar") {

    $usuario = [
        "nome" => $_POST["nome"],
        "telefone" => $_POST["telefone"],
        "email" => $_POST["email"]
    ];


    if (file_exists($arquivo)) {

        $json = file_get_contents($arquivo);

        $usuarios = json_decode($json, true);

    } else {

        $usuarios = [];

    }


    $usuarios[] = $usuario;

    /*
        file_put_contents() é uma função do PHP usada
        para criar arquivos ou gravar conteúdo em arquivos.
    */

    file_put_contents(
        $arquivo,
        json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
    );

    echo "Usuário salvo com sucesso!";

}

if ($_POST["acao"] == "mostrar") {
















    /*
        file_get_contents() é uma função nativa do PHP
        usada para ler todo o conteúdo de um arquivo.
    */

    if (file_exists($arquivo)) {

        $json = file_get_contents($arquivo);

        $usuarios = json_decode($json, true);

        echo "<h2>Usuários Cadastrados</h2>";

        foreach ($usuarios as $usuario) {

            echo "Nome: " . $usuario["nome"] . "<br>";
            echo "Telefone: " . $usuario["telefone"] . "<br>";
            echo "Email: " . $usuario["email"] . "<br><hr>";

        }

    } else {

        echo "Nenhum usuário cadastrado.";

    }

}

?>