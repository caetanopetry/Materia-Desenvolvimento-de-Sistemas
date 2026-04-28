<?php
	// vamos receber uma variável via GET e exibir a mesma na tela
	$texto = $_GET['nome'];
?>
<html>
	<head>
		<title>EXEMPLO COM GET</title>
	</head>
	<body>
		Olá <strong><?=$texto?></strong>, seja bem vindo!
	</body>
</html>