<?php 

/*
* Este arquivo deve eliminar um registro na tabela pivô seguidores entre seguido e seguidor
*/

session_start();

require_once('db.class.php');

// mais segurança
if ($_SESSION['usuario_id'] == null) {
	header("Location: ..");
	die();
}

// usuário logado
$usuario_id_seguia = $_SESSION['usuario_id'];

// usuário a deixar de ser seguido
$usuario_id_a_nao_ser_seguido = $_POST['seguir_id_usuario'];

// segurança
if ($usuario_id_a_nao_ser_seguido == '' || $usuario_id_seguia == '') {
	die();	
}

$sql = "DELETE FROM seguidores 
				WHERE segue_id = $usuario_id_seguia 
				AND seguindo_id = $usuario_id_a_nao_ser_seguido";

// coisas de conexão
$obj_db = new db();

$link = $obj_db->conecta_mysql();

// erro de sql
if (!mysqli_query($link, $sql)) {
	echo 'Erro em deixar de seguir usuário';
	die();
}
else{
	echo 'Deixou de seguir usuário';
	die();
}