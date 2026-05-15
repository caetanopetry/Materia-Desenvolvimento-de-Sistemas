<?php

require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {

        $nome = trim($_POST["nome"] ?? "");
        $endereco = trim($_POST["endereco"] ?? "");

        if (
            $nome == "" ||
            $endereco == ""
        ) {

            die("Preencha todos os campos.");

        }

        $sql = "INSERT INTO tb_usuario
                (nome, endereco)
                VALUES
                (:nome, :endereco)";

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":endereco", $endereco);

        $stmt->execute();

        header("Location: index.php?cadastro=ok");
        exit();

    } catch (PDOException $e) {

        echo "Erro ao cadastrar: " . $e->getMessage();

    }

} else {

    echo "Erro no envio do formulário.
    Entre pelo form.cadastro.html";

}
?>