<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title></title>
</head>
<body><div>
	<?php 
		$n= isset($_GET["num"])?$_GET["num"]:0;
		$o= isset($_GET["oper"])?$_GET["oper"]:1;
		switch ($o) {
			case 1:
				$r=$n*2;
				break;
			case 2:
				$r= $n^3;
				break;	
			case 3;
				$r=sqrt($n);
			default:
				# code...
				break;
		}
		 echo "O valor solicitado é <span class='foco'>$r<span/>";
	 ?>
	 <a href="Aula10.html">Voltar</a>
	 
</div>
</body>
</html>