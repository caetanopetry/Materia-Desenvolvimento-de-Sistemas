<?php
require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {

        //  Capturando e limpando dados do formulário
        $nome      = trim($_POST["nm_nome"] ?? "");
        $endereco  = trim($_POST["ds_endereco"] ?? "");
        $telefone  = trim($_POST["nr_telefone"] ?? "");
        $email     = trim($_POST["ds_email"] ?? "");

        // checkbox: se não vier marcado → 0
        $estcivil  = isset($_POST["ds_estcivil"]) ? 1 : 0;

        //  Validação simples (didática)
        if ($nome == "") {
            die("O nome é obrigatório.");
        }
       
        $sql = "INSERT INTO tb_cliente
                (nm_nome, ds_endereco, nr_telefone, ds_email, ds_estcivil)
                VALUES
                (:nome, :endereco, :telefone, :email, :estcivil)";

        /*
        prepare -> é um método do PHP Data Objects (PDO) que prepara uma consulta SQL para execução, retornando um objeto
        
        O bindParam() no PHP PDO é um método usado para vincular (associar) uma variável PHP a um marcador nomeado (:nome) ou de interrogação (?) em uma consulta SQL preparada
        
        */ 


        $stmt = $pdo->prepare($sql);

        //  Bind dos parâmetros
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":endereco", $endereco);
        $stmt->bindParam(":telefone", $telefone);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":estcivil", $estcivil, PDO::PARAM_INT);

        //Executa
        $stmt->execute();

        echo "Cliente cadastrado com sucesso!";
        

    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }

} else {
    echo "Erro no envio do formulário.";
}
?>