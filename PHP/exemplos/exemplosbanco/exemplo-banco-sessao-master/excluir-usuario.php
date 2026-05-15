<?php
require_once "conexao.php";

$id = $_GET['id'];

$sql = "DELETE FROM tb_usuario WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

header("Location: lista-usuarios.php");