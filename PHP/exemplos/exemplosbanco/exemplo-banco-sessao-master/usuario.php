<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h2>Cadastrar Usuário</h2>

    <form action="salvar_usuario.php" method="POST">

        <label>Nome</label>
        <input type="text" name="nm_usuario" required>

        <label>Login</label>
        <input type="text" name="nm_login" required>

        <label>Email</label>
        <input type="email" name="ds_email" required>

        <label>Senha</label>
        <input type="password" name="ds_password" required>

        <button type="submit">Cadastrar</button>

    </form>
</div>

</body>
</html>