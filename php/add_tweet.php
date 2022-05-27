<?php 

/*
* Este arquivo deve adicionar um tweet ao banco de dado
*/

session_start();

require_once('db.class.php');

// mais segurança
if ($_POST['texto-tweet'] == null || $_SESSION['usuario_id'] == null) {
	header("Location: ..");
	die();
}

$texto_tweet = $_POST['texto-tweet'];

// impede tweet vazio
if ($texto_tweet == '') {
	header("Location: ..");
	die();
}

$usuario_id = $_SESSION['usuario_id'];

$sql = "INSERT INTO `tweets` 
	(`usuario_id`, `conteudo`) VALUES 
	('$usuario_id', '$texto_tweet');";

// coisas de conexão
$obj_db = new db();

$link = $obj_db->conecta_mysql();

// erro de sql
if (!mysqli_query($link, $sql)) {
	echo 'Não foi possível inserir o novo tweet';
	die();
}