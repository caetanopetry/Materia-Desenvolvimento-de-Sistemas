<?php

require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {

        $nome  = trim($_POST["nm_usuario"] ?? "");
        $login = trim($_POST["nm_login"] ?? "");
        $email = trim($_POST["ds_email"] ?? "");
        $senha = trim($_POST["ds_password"] ?? "");

        if (
            $nome == "" ||
            $login == "" ||
            $email == "" ||
            $senha == ""
        ) {
            die("Preencha todos os campos.");
        }

        // CRIPTOGRAFAR SENHA
        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO tb_usuario
                (nm_usuario, nm_login, ds_email, ds_password)
                VALUES
                (:nome, :login, :email, :senha)";

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":login", $login);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senhaCriptografada);

        $stmt->execute();

        header("Location: login.html");
        exit();

    } catch (PDOException $e) {

        echo "Erro ao cadastrar: " . $e->getMessage();

    }

} else {

    echo "Erro no envio do formulário.";

}
?>