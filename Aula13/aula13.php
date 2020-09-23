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
		$i=isset($_GET["num"])?$_GET["num"]:0;	
			for ($i=$i; $i <10 ; $i++) { 
				echo "$i";
			}
		 ?>
	</div>
</body>
</html>