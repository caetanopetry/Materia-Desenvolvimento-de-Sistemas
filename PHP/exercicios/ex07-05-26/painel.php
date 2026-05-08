<?php

session_start();

if (!isset($_SESSION["usuario"])) {

    header("Location: login.html");
    exit();

}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">

    <title>Painel Principal</title>

    <link rel="stylesheet" href="css/painel.css">

</head>
<body>

    <div class="container">

        <h1>
            Bem-vindo,
            <span class="usuario">
                <?php echo $_SESSION["usuario"]; ?>
            </span>
        </h1>

        <p>
            Login realizado com sucesso.
        </p>

        <a href="logout.php" class="btn">
            Sair
        </a>

    </div>

</body>
</html>