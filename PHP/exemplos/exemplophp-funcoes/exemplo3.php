<?php
function obterAnoAtual() {
    return date("Y");
}

$ano = obterAnoAtual();
echo "Ano atual: $ano";
?>