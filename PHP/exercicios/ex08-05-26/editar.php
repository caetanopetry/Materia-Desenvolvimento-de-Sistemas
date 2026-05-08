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

$sql = "SELECT * FROM tb_usuario
        WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":id", $id);

$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">

    <title>Editar Usuário</title>

    <link rel="stylesheet" href="css/editar.css">

</head>
<body>

<div class="container">

    <h2>Editar Usuário</h2>

    <form action="atualizar.php" method="POST">

        <input type="hidden"
               name="id"
               value="<?php echo $usuario['id']; ?>">

        <label>Nome:</label>

        <input type="text"
               name="nm_usuario"
               value="<?php echo $usuario['nm_usuario']; ?>"
               required>

        <label>Email:</label>

        <input type="email"
               name="ds_email"
               value="<?php echo $usuario['ds_email']; ?>"
               required>

        <button type="submit">
            Salvar Alterações
        </button>

        <a href="excluir.php?id=<?php echo $usuario['id']; ?>"
            class="btn-excluir" 
            onclick="return confirm('Tem certeza que deseja excluir este usuário?')">Excluir Usuário
        </a>

        <a href="visualizar.php" class="btn">
            Voltar para a visualização
        </a>

    </form>

</div>

</body>
</html>