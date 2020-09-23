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
		$nome= isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
		$ano=isset($_GET["ano"])?$_GET["ano"]:0;
		$sexo=isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
		$idade = date("Y") - $ano;
		echo "$nome é $sexo e tem $idade anos";
	 ?>
	 <a href="Aula8ex2.html">Voltar</a>
	 </div>
</body>
</html>