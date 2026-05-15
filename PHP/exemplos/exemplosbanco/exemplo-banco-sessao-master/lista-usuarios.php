<?php
session_start();
require_once "conexao.php";

$sql = "SELECT id, nm_usuario, nm_login, ds_email FROM tb_usuario ORDER BY id";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<h2>👥 Lista de Usuários</h2>

<a href="usuario.php">
    <button>Novo Usuário</button>
</a>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Login</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($usuarios as $user): ?>
    <tr>
        <td><?= $user['id'] ?></td>
        <td><?= $user['nm_usuario'] ?></td>
        <td><?= $user['nm_login'] ?></td>
        <td><?= $user['ds_email'] ?></td>
        <td>
            <a href="editar-usuario.php?id=<?= $user['id'] ?>"> Editar</a>
            |
            <a href="excluir-usuario.php?id=<?= $user['id'] ?>"
               onclick="return confirm('Deseja excluir este usuário?')">
                Excluir
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>