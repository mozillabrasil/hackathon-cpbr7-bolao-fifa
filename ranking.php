<?php

include("connect.php");

$qry = "SELECT * FROM usuarios order by Pontos LIMIT 10";
$result = mysql_query($qry);
	?>
	<html>
	<head>
		<meta charset="UTF-8" >
	 	<title>Jogos</title>
		<link href="css/bootstrap.css" rel="stylesheet">
	</head>

	<header>
	<img Width="50%" height="180px" src="imagens/logo.jpg"></img><br><br>
	</header>

	<div class="container">
	<table class="table-condesed" border="1" align="center">
	<tr><th>Nome</th><th> Pontos</th>
	<?php
	while($array = mysql_fetch_array($result)) {
	 	print("<tr>");
		print("<td>".$array['Nome']."</td><td>".$array['Pontos']."</td>");
		print("</tr>");
	}
	print("</table>");
	print("</div>");
	?>
	<br><br><button class="btn btn-lg btn btn-block" type="button" Onclick="location.href='logado.html'">Voltar</button> <br>
	</body>
	</html>
	
?>

