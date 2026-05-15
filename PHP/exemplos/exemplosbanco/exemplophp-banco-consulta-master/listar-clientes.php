<?php
require_once "conexao.php";

try {
    $sql = "SELECT * FROM tb_clientes  ORDER BY id DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

     $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    /*fetchAll() é um método do PDO que:
     Busca TODAS as linhas retornadas pela consulta.
     
     Esse parâmetro define como os dados serão retornados.

    PDO::FETCH_ASSOC significa:

     Retornar como array associativo
     As chaves do array serão os nomes das colunas da tabela.
          
     */

               
} catch (PDOException $e) {
    die("Erro ao buscar clientes: " . $e->getMessage());
}
?>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Estado Civil</th>
        </tr>

         <?php foreach ($clientes as $cliente): ?> 
          
        <tr>
            <td><?= $cliente['id'] ?></td>
            <td><?= htmlspecialchars($cliente['nm_nome']) ?></td>
            <td><?= htmlspecialchars($cliente['ds_endereco']) ?></td>
            <td><?= htmlspecialchars($cliente['nr_telefone']) ?></td>
            <td><?= htmlspecialchars($cliente['ds_email']) ?></td>
            <td class="status">
                <?php
                    if($cliente['ds_estcivil'] == 1){
                        echo "<span class='casado'>Casado(a)</span>";
                    } else {
                        echo "<span class='solteiro'>Solteiro(a)</span>";
                    }
                ?>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>

</body>
</html>