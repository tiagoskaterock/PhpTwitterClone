<?php 

session_start();

require_once 'db.class.php';

// confere se não tem usuário ou senha por POST
if (!isset($_POST['usuario']) || !isset($_POST['senha'])) {
	header("Location: ..");
}

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// se usuário e senha em branco
if (($usuario == '') && ($senha == '')) {
	header("Location: ..?erro=2");
	die();
}

// se usuário em branco
else if(($usuario == '')){
	header("Location: ..?erro=3");	
	die();
}

// se senha em branco
else if(($senha == '')){
	header("Location: ..?erro=4");		
	die();
}

$sql = "SELECT * FROM usuarios 
				WHERE 
					senha = '$senha' 
				AND 
					(email = '$usuario' || nome = '$usuario')";

// coisas de conexão
$obj_db = new db();

$link = $obj_db->conecta_mysql();

$resultado_id = mysqli_query($link, $sql);

// se falha na conexão
if(!mysqli_query($link, $sql)) {
	echo 'Erro ao tentar se conectar com o banco de dados. Entre em contato com a equipe de desenvolvimento.';
	die();
}

// continua se a conexão funciona

$dados_usuario = mysqli_fetch_array($resultado_id);

// se Não encontra usuário
if ($dados_usuario == null) {
	header("Location: ..?erro=1");
	die();
}

// continua se encontra o usuário cadastrado
$nome = $dados_usuario['nome'];
$email = $dados_usuario['email'];
$id = $dados_usuario['id'];

// utilizando sessão para variáveis do usuário logado
$_SESSION['usuario_id'] = $dados_usuario['id'];
$_SESSION['usuario_nome'] = $dados_usuario['nome'];
$_SESSION['usuario_email'] = $dados_usuario['email'];

header("Location: ../home");










