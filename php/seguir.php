<?php 

/*
* Este arquivo deve adicionar um tweet ao banco de dado
*/

session_start();

require_once('db.class.php');

// mais segurança
if ($_SESSION['usuario_id'] == null) {
	header("Location: ..");
	die();
}

// usuário logado
$usuario_id_segue = $_SESSION['usuario_id'];

// usuário a ser seguido
$usuario_id_seguido = $_POST['seguir_id_usuario'];

// segurança
if ($usuario_id_seguido == '' || $usuario_id_segue == '') {
	die();	
}


$sql = "INSERT INTO `seguidores` (`segue_id`, `seguindo_id`) 
					VALUES ('$usuario_id_segue', '$usuario_id_seguido')";

// coisas de conexão
$obj_db = new db();

$link = $obj_db->conecta_mysql();

// erro de sql
if (!mysqli_query($link, $sql)) {
	echo 'Erro em seguir usuário';
	die();
}
else{
	echo 'success';
	die();
}