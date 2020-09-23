<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title></title>
</head>
<body>
	<form method="get" action="aula11.php">
		<div>
			<?php 
			$c=1;
			while ($c<= 5) {
				# code...
			
			echo "Valor $c: <input type='number' name='v$c' min='0' max='100' value='5'> <br/>";
				$c++;
			}
			 ?>
		</div>
	</form>

</body>
</html>