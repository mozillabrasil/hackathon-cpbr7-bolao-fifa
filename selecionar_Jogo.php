<html>
	<head>
		<meta charset="UTF-8" >
	 	<title>Jogos</title>
		<link href="css/bootstrap.css" rel="stylesheet">
	</head>
	
<header>
<img Width="50%" height="180px" src="imagens/logo.jpg"></img>
</header>

<?php

include ("connect.php");

		$where = Array();
		$where2 = Array();
		$selecao = getPost('selecao');
		$selecao2 = getPost('selecao2');
		$local = getPost('local');
 		$fase = getPost('fase');
		$grupo = getPost('grupo');
		
		if( $selecao ){ $where[] = " `Time_1` = '{$selecao}'"; }
		if( $selecao2 ){ $where[] = " `Time_2` = '{$selecao2}'"; }
		if( $local ){ $where[] = " `Local` = '{$local}'"; }
		if( $fase ){ $where[] = " `Fase` = '{$fase}'"; }
		if( $grupo ){ $where[] = " `Grupo` = '{$grupo}'"; }

		$sql = "SELECT * FROM partidas";
		if( sizeof( $where ) )
		 $sql .= ' WHERE '.implode(' AND ',$where );
		 $qtd = 0;
		 $result = mysql_query($sql) OR die('error: ' . mysql_error());;
		 $qtd = mysql_num_rows($result);

		 if ( $qtd >  0 ) {
		   	  	 ?>
			       <body>
				   <div class="container">
				   <h1 align="center">Jogos Selecionados<br></h1>
				   <table class="table-condesed" border="1" align="center">
				   <tr><th>Jogo</th><th>Local</th><th>Data</th><th>Horário</th><th>Apostar</th></tr>
					<?php 
					while($array = mysql_fetch_array($result)) {
					 	print("<tr>");
						print("<td>".$array['Time_1']." x ".$array['Time_2']."<td>".$array['Local']."</td><td>".$array['Data']."</td><td>".$array['Horario']."</td><td><a href='apostar.php/?id=".$array['Id']."'><img src='imagens/aposte.jpg'></a></td>");
						print("</tr>");
					}
					?>
					</table>
					<br><p align="center"><button class="btn" align="center" onclick="history.go(-1)">Voltar</button></p> 
					</div>
					</body>
					</html>
					<?php
			}
		else {	?>
     			<script language="javascript" type="text/javascript">
	           		alert("Não existem JOGOS que atendam a este filtro"); 
	           		location.href = "jogos.html";
				</script> 
		<?php
		}    
		
		function filter( $str ){
			return addslashes( $str );
		}
		function getPost( $key ){
			return isset( $_POST[ $key ] ) ? filter( $_POST[ $key ] ) : null;
		}
?>