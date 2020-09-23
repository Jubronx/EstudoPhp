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
			function soma(){
		$p   = func_get_args();//pega os valores e coloca em vetores
		$tot = func_num_args();//retorna o numero de argumentos que foram passados
		$s = 0;	
			for ($i=0; $i<$tot ; $i++) { 
				$s = $s+$p[$i];		
				}	
				return $s;
			}
		$r=soma(3,1,2);
		echo "A soma dos valores é $r";		
		 ?>	
		 	
		 </div>
</body>
</html>