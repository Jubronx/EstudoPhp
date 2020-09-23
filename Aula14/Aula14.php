<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title>FUNÇÕES</title>
</head>
<body>
	<div>
	<?php 
		function soma ($a,$b)
		{
			$s= $a + $b;
			echo "<p>A soma vale $s </p>";
		
		}
		soma(2,3);
		soma(4,7);
		$y = 9;
		$x = 18;
		soma($y,$x);
	?>
	</div>
</body>
</html>