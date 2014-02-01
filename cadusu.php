<?php

include ("connect.php");

$name = strtoupper($_POST['name']); 
$email = $_POST['email']; 
$senha = $_POST['senha'];
$dtnasc = $_POST['dtnasc'];
$selecao = $_POST['selecao'];
$times = $_POST['times'];


$qrsel = "select * from usuarios where email='".$email."'";
$select = mysql_query($qrsel);

if (mysql_num_rows($select) >= 1) { 
    ?> <script language="javascript"
    type="text/javascript">
           alert("Este usuario já existe no Sistema "); 
           location.href = "cadastrar.html";
   </script> <?php
}

else { 
   $sql = "insert into usuarios(Nome,Email,Senha,Dtnasc,Selecao,Time,Pontos) values ('".$name."','". $email ."','".sha1($senha)."','". $dtnasc ."','".$selecao."','".$times."','0')";
   $query = mysql_query($sql) OR die('error: ' . mysql_error());;
   ?>
   <script language="javascript" type="text/javascript">
      alert("Cadastro realizado com sucesso"); 
      location.href = "index.html";             
  </script> 
<?php
}
?>
