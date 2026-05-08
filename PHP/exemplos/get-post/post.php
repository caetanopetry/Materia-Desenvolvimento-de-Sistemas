<html>
	<head>
		<title>Exemplo com POST</title>
	</head>
	<body>
		
		<?php if(isset($_POST['palavra'])) { ?>
			<h3>Voce buscou por: <?=$_POST['palavra']?></h3>
		<?php } ?>
		
		<form method="post" >
			<p>Digite uma palavra:</p>
			<input name="palavra" type="text" />
		</form>
		
	</body>
</html>