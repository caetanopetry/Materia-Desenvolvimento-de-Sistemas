<?php
require_once "conexao.php";

$id = $_GET['id'];

$sql = "SELECT * FROM tb_usuario WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h2>Editar Usuário</h2>

<form action="salvar-edicao-usuario.php" method="POST">

    <input type="hidden" name="id" value="<?= $usuario['id'] ?>">

    Nome:<br>
    <input type="text" name="nm_usuario"
           value="<?= $usuario['nm_usuario'] ?>" required>
    <br><br>

    Login:<br>
    <input type="text" name="nm_login"
           value="<?= $usuario['nm_login'] ?>" required>
    <br><br>

    Email:<br>
    <input type="email" name="ds_email"
           value="<?= $usuario['ds_email'] ?>" required>
    <br><br>

    Nova senha (opcional):<br>
    <input type="password" name="ds_password">
    <br>
    <small>Preencha apenas se quiser alterar a senha</small>
    <br><br>

    <button type="submit">Salvar Alterações</button>

</form>