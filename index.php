<!DOCTYPE html> 
<html lang="pt-BR"> 
	<head> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title> Desafio - Stairs </title> 
		
		<!-- FRAMEWORK BOOTSTRAP-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		
		<!--css-->
		<link rel="stylesheet" type="text/css" href="static/css/index.css" th:href="@{/css/index.css}">
	</head>

	<body>
		<h1> Estados Brasileiros </h1>
		<p> Aqui você pode obter algumas informações sobre as 27 unidades federativas brasileiras, sendo 26 estados e um distrito federal</p>
		
		<form action="" placeholder="Ex: Santa Catarina" method="post">
			<fieldset>
				<legend> Procure por um estado brasileiro: </legend>
				<input type="text" name="estado"> <br><br>
				<button type="submit" name="enviar"> Procurar </button>
			</fieldset>


<?php
	
	if(isset($_POST["enviar"]))
	{
		require "Estado.php";
		$resultado = new Estado();
		echo $resultado->busca($_POST['estado']);
	}
?>

	</body>
</html>