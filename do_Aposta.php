<?php

include("connect.php");

if (!isset($_SESSION)) session_start();
$usuid = $_SESSION['UsuarioID'];


$idjogo = $_POST['idpartida'];
$restime1 = $_POST['restime1'];
$restime2 = $_POST['restime2'];

$qrsel = "select * from apostas where partidas_Id ='".$idjogo."' AND usuarios_Id='".$usuid."'";

$select = mysql_query($qrsel);

if (mysql_num_rows($select) >= 1) { 
    ?> <script language="javascript"
    type="text/javascript">
           alert("Você já realizou aposta nesse jogo"); 
           location.href = "jogos.html";
   </script> <?php
}

else { 
   $sql = "insert into apostas(Restime_1,Restime_2,usuarios_Id,partidas_Id) values ('".$restime1."','". $restime2 ."','". $usuid ."','".$idjogo."')";
   $query = mysql_query($sql) OR die('error: ' . mysql_error());;
   ?>
   <script language="javascript" type="text/javascript">
      alert("Aposta Realizada com Sucesso"); 
      location.href = "logado.html";             
</script> 
<?php
}
?>
