<?php
include("conexao.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Busca Dinâmica</title>
</head>
    <link rel="stylesheet" href="css/index.css">

<body>

<div class="container">
<?php
if(isset($_GET['cadastro'])){
    echo "<p id='msg'>Usuário cadastrado com sucesso!</p>";
}
?>
<h2>Busca de Usuários</h2>

<form method="POST">

<select name="tipo">
    <option value="id">Buscar por ID</option>
    <option value="nome">Buscar por Nome</option>
    <option value="endereco">Buscar por Endereço</option>

</select>

<input
type="text"
name="valor"
placeholder="Digite a busca"
required>

<button type="submit" name="buscar">
Buscar
</button>

</form>


<hr>

<?php

if(isset($_POST['buscar'])){

    $tipo = $_POST['tipo'];
    $valor = trim($_POST['valor']);

    if(empty($valor)){

        echo "Digite um valor para buscar";

    }else{

        if($tipo=="id"){

            $sql = "SELECT * 
                    FROM tb_usuario
                    WHERE id = :valor";

            $consulta =
            $pdo->prepare($sql);

            $consulta->bindValue(
                ":valor",
                $valor
            );

        }
        elseif($tipo=="endereco"){

            $sql = "SELECT * 
                    FROM tb_usuario
                    WHERE endereco 
                    LIKE :valor";

            $consulta =
            $pdo->prepare($sql);

            $consulta->bindValue(
                ":valor",
                "%$valor%"
            );

        }
        
        else{

            $sql = "SELECT *
                    FROM tb_usuario
                    WHERE nome
                    LIKE :valor";

            $consulta =
            $pdo->prepare($sql);

            $consulta->bindValue(
                ":valor",
                "%$valor%"
            );

        }

        $consulta->execute();

        if($consulta->rowCount()>0){

            echo "<table border='1'>";

            echo "
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
            </tr>
            ";

            while(
            $dados=
            $consulta->fetch(
            PDO::FETCH_ASSOC
            )){

                echo "
                <tr>
                <td>".$dados['id']."</td>
                <td>".$dados['nome']."</td>
                <td>".$dados['endereco']."</td>
                </tr>
                ";
            }

            echo "</table>";

        }else{

            echo "Nenhum registro encontrado";

        }

    }

}

?>
<a href="formcadastro.html" class="cadastrar">Cadastrar novo usuário</a>

</div>

<script>

if(window.location.search.includes("cadastro=ok")){

    setTimeout(() => {

        window.history.replaceState(
            {},
            document.title,
            window.location.pathname
        );

        document.getElementById("msg")?.remove();

    },2000);

}

</script>
</body>
</html>