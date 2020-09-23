<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">	
	<title>	</title>
</head>
<body>
	<div>	
	<?php 
		$n1 = isset($_GET["ini"])?$_GET["ini"]:0;
		$n2 = isset($_GET["fim"])?$_GET["fim"]:0;
		$c 	= isset($_GET["incr"])?$_GET["incr"]:0;
		
		while ($n1<=$n2) {
			echo "$n1 <br/>";
			$n1=$n1+$c;
		}
		while ($n1>=$n2) {
			echo "$n1 <br/>";
			$n1=$n1-$c;
		}

	 ?>

	</div>
</body>
</html>