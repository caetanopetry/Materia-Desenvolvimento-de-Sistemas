<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação de usuário</title>
   
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Autenticação de usuários</h2>
       <form id="formLogin" method="POST" action="login.php">
            <label for="nm_login">Login</label>
            <input type="text" id="nome" name="nm_login" required>

            <label for="ds_password">Senha</label>
            <input type="password" id="ds_password" name="ds_password" required>
           
            <button type="submit" class="btn btn-primary">Entrar</button>
            <?php
              
                if (isset($_GET['erro'])) {

                    $mensagem = '';

                    if ($_GET['erro'] == 'usuario') {
                        $mensagem = "Usuário não encontrado!";
                    } elseif ($_GET['erro'] == 'senha') {
                        $mensagem = "Senha incorreta!";
                    } elseif ($_GET['erro'] == 'expirado') {
                        $mensagem = "Sua sessão expirou por inatividade. Faça login novamente.";
                    }

                    if ($mensagem != '') {
                        echo '<div class="erro-login">' . $mensagem . '</div>';
                    }
                }
                ?>
            
            <div id="message" style="display:none; margin-top: 10px;"></div>
        </form>
    </div>
   
</body>
</html>
