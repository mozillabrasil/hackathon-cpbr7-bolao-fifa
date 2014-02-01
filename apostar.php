<?php

include("connect.php");
$idjogo = $_GET['id'];

$qry = "SELECT * FROM partidas where id = $idjogo";
$result = mysql_query($qry);

while($array = mysql_fetch_array($result)) {
	$Id = $array['Id'];
	$Time1 = $array['Time_1'];
	$Time2 = $array['Time_2'];
	$Local = $array['Local'];
	$Horario = $array['Horario'];
	$Grupo = $array['Grupo'];
	$Fase = $array['Fase'];
	$Resultado = $array['Resultado'];
}
	
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" >
	 	<title>Jogos</title>
		<link href="/Firefox/css/bootstrap.css" rel="stylesheet">
	</head>
	
<header>
<img Width="50%" height="180px" src="/Firefox/imagens/logo.jpg"></img><br><br>
</header>

<body>
<div class="container">
	<form name="apostar" method="post" action="/Firefox/do_Aposta.php">
	<label>Jogo:</label> <?php echo $Time1 . " x " . $Time2 ?><br>
	<label>Local:</label> <?php echo $Local ?><br>
	<label>Horário:</label> <?php echo $Horario ?><br>
	<label>Grupo:</label> <?php echo $Grupo ?><br>
	<label>Fase:</label> <?php echo $Fase ?><br>
	<label>Aposta:</label> 
	<h2 align="center"><?php echo $Time1 ?></h2> <select name="restime1" class="form-control"> 
						  <option value="0">0</option>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						  <option value="6">6</option>
						  <option value="7">7</option>
						  <option value="8">8</option>
						  <option value="9">9</option>
						  <option value="10">10</option>
						  </select> <p align="center">x</p>
	<select name="restime2" class="form-control"> 
						  <option value="0">0</option>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						  <option value="6">6</option>
						  <option value="7">7</option>
						  <option value="8">8</option>
						  <option value="9">9</option>
						  <option value="10">10</option>
						  </select>	<h2 align="center"><?php echo $Time2 ?></h2>
	<input type="hidden" name="idpartida" value="<?php echo $Id ?>"></input><br>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Confirmar</button>
	<button class="btn btn-lg btn-primary btn-block" type="button" Onclick="location.href='/Firefox/jogos.html'">Cancelar </button> 
	</form>
</div>
</body>


</html>