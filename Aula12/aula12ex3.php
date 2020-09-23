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
		$v = isset($_GET["number"])?$_GET["number"]:1;
		$tab ;	
		$c =0;
		do {
		$tab= $v * $c;
		echo "<p> $v x $c = $tab <p>";

		$c++;


		} while ($c<=10);	

		 ?>
		 <a href="aula12ex3.html">Voltar</a>
	</div>
</body>
</html>