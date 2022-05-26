<?php 

require_once 'db.class.php';

// confere se não tem usuário ou senha por POST
if (!isset($_POST['usuario']) || !isset($_POST['senha'])) {
	header("Location: ..");
	die();
}

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// usuário e senha em branco
if (($usuario == '') && ($senha == '')) {
	header("Location: ..");
	die();
}

// usuário em branco
else if(($usuario == '')){
	header("Location: ..");
	die();
}

// senha em branco
else if(($senha == '')){
	header("Location: ..");
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

// falha na conexão
if(!mysqli_query($link, $sql)) {
	echo 'Erro ao tentar se conectar com o banco de dados. Entre em contato com a equipe de desenvolvimento.';
	die();
}

// continua se a conexão funciona

$dados_usuario = mysqli_fetch_array($resultado_id);

// Não encontrou usuário
if ($dados_usuario == null) {
	header("Location: ..?erro=1");
	die();
}

// continua se encontra o usuário cadastrado

$nome = $dados_usuario['nome'];
$email = $dados_usuario['email'];
$id = $dados_usuario['id'];

echo $id;
echo "<br>";
echo $nome;
echo "<br>";
echo $email;










