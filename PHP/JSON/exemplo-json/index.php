<?php
//Exemplo com uso de json_decode de json para php
echo "Exemplo com uso de json_decode de json para php";
echo "<br>";

$json = '{"nome":"Maria","idade":25,"email":"maria@example.com"}';
$dados = json_decode($json, true); // O segundo parâmetro true converte para array
echo $dados["nome"]; 

//Exemplo com uso de json_encode de php para json
echo "<br>";
// Convertendo um array associativo para JSON
echo "Exemplo com uso de json_encode de php para json";
echo "<br>";
$dados = [
  "nome" => "Joao",
  "idade" => 30
];
$json = json_encode($dados);
echo $json; // {"nome":"Joao","idade":30}

?>
