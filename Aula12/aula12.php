<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title></title>
</head>
<body>
	<div>
		<?php 
		$v= isset($_GET["val"])?$_GET["val"]:1;
		echo "<h1>Calculando o Fatorial de $v<h1>";
		$c = $v;
		$fat = 1;
		do {
			$fat= $fat*$c;
			$c--;

		} while ($c>=1);
		 echo "<h2>$v ! = $fat <h2>";
		 ?>
		 <p><a href="aula12.html">Voltar</a></p>
	</div>

</body>
</html>