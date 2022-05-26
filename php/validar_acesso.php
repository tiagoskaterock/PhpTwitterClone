<?php 

session_start();

require_once 'db.class.php';

// sem usuário ou sem senha por POST
if (!isset($_POST['usuario']) || !isset($_POST['senha'])) {
	header("Location: ..");
}

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// usuário e senha em branco
if (($usuario == '') && ($senha == '')) {
	header("Location: ..?erro=2");
	die();
}

// usuário em branco
else if(($usuario == '')){
	header("Location: ..?erro=3");	
	die();
}

// senha em branco
else if(($senha == '')){
	header("Location: ..?erro=4");		
	die();
}

$sql = "SELECT * FROM usuarios 
				WHERE email = '$usuario' || nome = '$usuario'";					

// coisas de conexão
$obj_db = new db();

$link = $obj_db->conecta_mysql();

$resultado_id = mysqli_query($link, $sql);

// falha na conexão
if(!mysqli_query($link, $sql)) {
	echo 'Erro ao tentar se conectar com o banco de dados. Entre em contato com a equipe de desenvolvimento.';
	die();
}

// continua se a conexão funciona

$dados_usuario = mysqli_fetch_array($resultado_id);

// não encontra usuário
if ($dados_usuario == null) {
	header("Location: ..?erro=1");
	die();
}

// continua se encontra o usuário cadastrado

// confere se a hash da senha digitada bate com a hash armazenada no banco
// boolean                       // senha      // hash
$senha_certa = password_verify($senha, $dados_usuario['senha']);

// não confirma a senha
if (!$senha_certa) {
	header("Location: ..?erro=1");
	die();
}

// senha certa prossegue

// utilizando sessão para variáveis do usuário logado
$_SESSION['usuario_id'] = $dados_usuario['id'];
$_SESSION['usuario_nome'] = $dados_usuario['nome'];
$_SESSION['usuario_email'] = $dados_usuario['email'];

header("Location: ../home");