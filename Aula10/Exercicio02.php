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
		$d= isset($_GET["dia"])?$_GET["dia"]:0;
		switch ($d) {
			case 2:
			case 3:
			case 4:
			case 5:
			case 6:
				echo "Levanta e vai estudar :)";	
				break;
			
			case 7:
			case 8:
				echo "pinga na mente ;)";
				break;
			default:
				echo "Dia da semana inválido";

		}

		 ?>
		 <a href="javascript:history.go(-1)">Voltar</a>
	</div>

</body>
</html>