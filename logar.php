<?php

include ("connect.php");
// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {
	header("Location: index.html"); exit;
}

$email = mysql_real_escape_string($_POST['email']);
$senha = mysql_real_escape_string($_POST['senha']);

// Validação do usuário/senha digitados
$sql = "SELECT id, email FROM usuarios WHERE email = '$email' AND senha = '".sha1($senha)."' LIMIT 1";
$query = mysql_query($sql);

if (mysql_num_rows($query) != 1) {
	// Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
?>

<script type="text/javascript" charset="utf-8"> alert("Nome ou usuario invalido!"); location.href="index.html"; </script>

<?php
} 

else {
	// Salva os dados encontados na variável $resultado
	$resultado = mysql_fetch_assoc($query);

	// Se a sessão não existir, inicia uma
	if (!isset($_SESSION)) session_start();

	// Salva os dados encontrados na sessão
	$_SESSION['UsuarioID'] = $resultado['id'];
	$_SESSION['UsuarioNome'] = $resultado['nome'];

	// Redireciona o visitante
	header("Location: logado.html"); exit;
}	
?>


