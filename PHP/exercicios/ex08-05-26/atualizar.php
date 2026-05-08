<?php

session_start();

if (!isset($_SESSION["usuario"])) {

    header("Location: login.html");
    exit();

}

if ($_SESSION["admin"] != 1) {

    header("Location: painel.php");
    exit();

}

require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];
    $nome = trim($_POST["nm_usuario"]);
    $email = trim($_POST["ds_email"]);

    $sql = "UPDATE tb_usuario
            SET
                nm_usuario = :nome,
                ds_email = :email
            WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":id", $id);

    $stmt->execute();

    header("Location: visualizar.php?sucesso=1");

    exit();

}
?>