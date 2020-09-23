<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title></title>
</head>
<body>
	<div>
	<form method="get" action="tabuada2.php">
		<select name="num">
			<?php
			for ($i=1; $i <=10 ; $i++) { 
					echo "<option>$i</option>";
				}	
			 ?>
			 <input type="submit" value="Calcular">
		</select>				

	</form>
	</div>

</body>
</html>