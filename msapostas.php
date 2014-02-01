<?php

include("connect.php");
	if (!isset($_SESSION)) session_start();
	$id = $_SESSION['UsuarioID'];

	$qry = "SELECT * FROM apostas where usuarios_Id = '".$id."'";
	$result = mysql_query($qry) OR die('error: ' . mysql_error());;
	?>
	<html>
	<head>
		<meta charset="UTF-8" >
	 	<title>Minhas Apostas</title>
		<link href="css/bootstrap.css" rel="stylesheet">
	</head>

	<header>
	<img Width="50%" height="180px" src="imagens/logo.jpg"></img><br><br>
	</header>

	<div class="container">
	<table class="table-condesed" border="1" align="center">
	<tr><th>Jogo</th><th>Resultado</th>
	<?php
	while($array = mysql_fetch_array($result)) {
		$qryjog = "select Time_1,Time_2 from partidas where id = '".$array['partidas_Id']."'";
		$resjogo = mysql_query($qryjog);
		$array2 = mysql_fetch_array($resjogo);

	 	print("<tr>");
		print("<td>".$array2['Time_1']." x ".$array2['Time_2']."</td><td> ".$array['Restime_1']." x ".$array['Restime_2']."</td>");
		print("</tr>");
	}
	print("</table>");
	print("</div>");
	?>
	<br><br><button class="btn btn-lg btn btn-block" type="button" Onclick="location.href='logado.html'">Voltar</button> <br>
	</body>
	</html>
	
?>

