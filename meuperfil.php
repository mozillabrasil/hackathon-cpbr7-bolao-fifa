<?php

include("connect.php");

	if (!isset($_SESSION)) session_start();
	$id = $_SESSION['UsuarioID'];

	$qry = "SELECT * FROM usuarios where Id = '".$id."'";
	$result = mysql_query($qry);

	while($array = mysql_fetch_array($result)) {
		$id = $array['Id'];
		$nome = $array['Nome'];
		$email = $array['Email']; 
		$dtnasc = $array['Dtnasc'];
		$selecao = $array['Selecao'];
		$times = $array['Time'];
		$pontos = $array['Pontos'];
	}
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Meu Perfil</title>
		<link href="css/bootstrap.css" rel="stylesheet">
	</head>
	<header>
	<img Width="50%" height="180px" src="imagens/logo.jpg"></img>
	</header>

	<body>
	 <div class="container">
	 	<br>
	 	<br>
		<div class="alinhar">
		<label>Nome:</label> <?php echo $nome ?><br>
		<label>E-mail:</label> <?php echo $email ?><br>
		<label>Data de Nascimento:</label> <?php echo $dtnasc ?><br>
		<label>Seleção:</label> <?php echo $selecao ?><br>
		<label>Time:</label> <?php echo $times ?><br>
		<label>Pontos:</label> <?php echo $pontos ?><br>
		</div><br>
		<button class="btn btn-lg btn btn-block" type="button" Onclick="location.href='logado.html'">Voltar</button> <br>
		<img width="50%" heigh:="200px" src="imagens/fuleco.jpeg">
	</div>

	</body>
</html>

