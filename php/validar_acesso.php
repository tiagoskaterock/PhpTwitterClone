<?php 

require_once 'db.class.php';

// confere se não tem usuário ou senha por POST
if (!isset($_POST['usuario']) || !isset($_POST['senha'])) {
	echo 'ocorreu um erro ao validar o acesso';
	die();
}

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// usuário e senha em branco
if (($usuario == '') && ($senha == '')) {
	echo 'usuário e senha em branco';
	die();
}

// usuário em branco
else if(($usuario == '')){
	echo 'usuário em branco';
	die();
}

// senha em branco
else if(($senha == '')){
	echo 'senha em branco';
	die();
}

$sql = "SELECT * FROM usuarios 
				WHERE 
					senha = '$senha' 
				AND 
					(email = '$usuario' || nome = '$usuario')";

$obj_db = new db();

$link = $obj_db->conecta_mysql();

$resultado_id = mysqli_query($link, $sql);

// sucesso na conexão
if(mysqli_query($link, $sql)) {
	// echo 'succes';
}
// falha na conexão
else {
	echo 'Erro ao tentar se conectar com o banco de dados. Entre em contato com a equipe de desenvolvimento.';
	die();
}

$dados_usuario = mysqli_fetch_array($resultado_id);

// confere se encontra o usuário
if ($dados_usuario != null) {
	echo '<br>';
	print_r($dados_usuario);
	echo '</br>';	
}
// Não encontrou usuário
else {
	echo 'sem usuário encontrado';
}








