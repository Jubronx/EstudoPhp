<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title></title>
</head>
<body><div>
<?php 
	$nota1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
	$nota2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
	$media = ($nota1+$nota2)/2;
	echo "Sua media é $media <br/>";
	if ($media<5) {
		echo "Situação do aluno: Recuperação";
		# code...
	}
	else{
		echo "Situação do aluno: Aprovado";
	}

 ?>
 <a href="Exercicio01.html">Voltar</a>
 </div>
</body>
</html>