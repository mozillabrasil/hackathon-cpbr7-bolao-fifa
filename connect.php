<?php

header('Content-Type: text/html; charset=UTF-8');
$host = "localhost"; // Máquina que esta instalado o MySQL, pode colocar o nome ou o endereço IP
$user = "bolao_wcc"; //Nome do usuário de acesso ao banco, normalmente usa-se o root (administrador)
$pass = "123bolao"; //Senha que foi definida para o usuário root.
$database = "bolao_wcc"; //Nome do banco de dados
//A string conexão irá receber os parâmetros de conexão com o banco de dados, e também selecionar o banco a ser utilizado

$conexao = mysql_connect($host,$user,$pass) or die ("Não foi possível conectar com o banco de dados");
  mysql_select_db($database,$conexao) or die ("Não foi possível selecionar o banco");
  mysql_set_charset('UTF8', $conexao);

?>
