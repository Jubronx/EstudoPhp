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
		$v=isset($_GET["num"])?$_GET["num"]:0;
		$tab;
		for ($c=0; $c<=10 ; $c++) { 
			$tab = $v * $c;
			echo "<p>$v x $c = $tab <p>";
		}
		 ?>
		 <a href="javascript:history.go(-1)"> Voltar </a>
	</div>

</body>
</html>