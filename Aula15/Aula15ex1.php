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
		function soma (&$x)
		{
			$x = $x + 2;
			echo "Valor de X é $x";	
		}
		$a=3;
		soma($a);
		echo "Valor de A é $a";
	 ?>
</div>

</body>
</html>