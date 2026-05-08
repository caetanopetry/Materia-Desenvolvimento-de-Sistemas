<?php

session_start();

require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $login = trim($_POST["nm_login"] ?? "");
    $senha = trim($_POST["ds_password"] ?? "");

    $sql = "SELECT * FROM tb_usuario
            WHERE nm_login = :login";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(":login", $login);

    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {

        #pra verificar senha criptografada
        if (password_verify($senha, $usuario["ds_password"])) {

            $_SESSION["usuario"] = $usuario["nm_usuario"];

            #Sessão admin (dá valor 1)
            $_SESSION["admin"] = $usuario["is_admin"];


            header("Location: painel.php");
            exit();

        } else {

            echo "Senha incorreta.";

        }

    } else {

        echo "Usuário não encontrado.";

    }

}
?>