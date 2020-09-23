<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div>
		<?php 
			$valor = $_GET["v"]; 
			$rq = sqrt($valor);
			echo "A raiz quadrada de $valor é " .number_format($rq,2);
		 ?>
		 <a href="Aula8.php">Voltar</a>
	</div>
</body>
</html>