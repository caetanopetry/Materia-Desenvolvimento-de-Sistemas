<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome_cliente = $_POST["nome_cliente"];
    $cliente_vip = isset($_POST["cliente_vip"]);
    $nome_produto = $_POST["nome_produto"];
    $qtd_estoque = $_POST["qtd_estoque"];
    $valor_unitario = $_POST["valor_unitario"];
    $qtd_vendida = $_POST["qtd_vendida"];

    if ($qtd_vendida > $qtd_estoque) {
        echo "<h2 style='color:red;'>Quantidade insuficiente em estoque!</h2>";
    } else {

  
        if ($cliente_vip) {
            $valor_unitario = $valor_unitario - ($valor_unitario * 0.20);
        }

    
        $total = $valor_unitario * $qtd_vendida;

      
        echo "<h2>Dados da Venda</h2>";

        echo "Cliente: $nome_cliente <br>";
        echo "VIP: " . ($cliente_vip ? "Sim" : "Não") . "<br>";
        echo "Produto: $nome_produto <br>";
        echo "Estoque: $qtd_estoque <br>";
        echo "Valor Unitário: R$ " . number_format($valor_unitario, 2, ",", ".") . "<br>";
        echo "Quantidade Vendida: $qtd_vendida <br>";

        echo "<br><strong>Total: R$ " . number_format($total, 2, ",", ".") . "</strong>";
    }

}

?>