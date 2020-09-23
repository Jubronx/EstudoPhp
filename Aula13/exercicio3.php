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
			$n = isset($_GET["num"])?$_GET["num"]:0;
			$c;
			$mult=0;
			echo "<h3>O numero $n é multiplo de: <h3>";
			for ($c=1; $c<=$n; $c++) { 
			 	if($n%$c==0)
			 	{
			 	echo "$c ";	
			 	$mult++;
			 	} //contador para ver quando vezes o numero foi dividido
			}
			echo"<br>";
			echo "Total de multiplos: $mult <br>";

			if ($mult==2) {
				echo "<span class ='foco'>O numero é Primo<span/>";
			}
			else {
				echo "<span class = 'foco'> Não é primo <span>";
			}

		 ?>
	</div>

</body>
</html>