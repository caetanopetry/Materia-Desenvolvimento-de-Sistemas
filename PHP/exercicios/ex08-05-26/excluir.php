


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

$id = $_GET["id"];

// Busca o usuário antes de excluir
$sql = "SELECT * FROM tb_usuario
        WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":id", $id);

$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

// Impede admin de excluir a si mesmo
if ($usuario["nm_usuario"] == $_SESSION["usuario"]) {

    header("Location: visualizar.php?erro=selfdelete");
    exit();

}

// DELETE
$sql = "DELETE FROM tb_usuario
        WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":id", $id);

$stmt->execute();

header("Location: visualizar.php?excluido=1");

exit();

?>