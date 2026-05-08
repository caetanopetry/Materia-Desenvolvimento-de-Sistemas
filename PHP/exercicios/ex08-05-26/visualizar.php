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

$sql = "SELECT id, nm_usuario, ds_email FROM tb_usuario";

$resultado = $pdo->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">

    <title>Visualizar Usuários</title>

    <link rel="stylesheet" href="css/visualizar.css">

</head>

<body>

<?php if (isset($_GET["sucesso"])) { ?>

<script>

    alert("Usuário atualizado com sucesso!");

</script>

<?php } ?>

<?php if (isset($_GET["excluido"])) { ?>

<script>

    alert("Usuário excluído com sucesso!");

</script>

<?php } ?>

<?php if (isset($_GET["erro"])) { ?>

<script>

    alert("Você não pode excluir sua própria conta admin!");

</script>

<?php } ?>

<div class="container">

    <h2>Lista de Usuários</h2>

    <table>

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>

        <?php

        while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {

            echo "<tr>";

            echo "<td>" . $linha['id'] . "</td>";

            echo "<td>" . $linha['nm_usuario'] . "</td>";

            echo "<td>" . $linha['ds_email'] . "</td>";

            echo "<td>
                    <a href='editar.php?id=" . $linha['id'] . "' class='btn-editar'>
                        Editar
                    </a>
                  </td>";

            echo "</tr>";

        }

        ?>

    </table>

    <a href="painel.php" class="btn">
        Voltar para o painel
    </a>

</div>

</body>
</html>