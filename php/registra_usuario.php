<?php

	require_once('db.class.php');

	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$obj_db = new db();

	$link = $obj_db->conecta_mysql();

	$sql = "INSERT INTO `usuarios` (`id`, `nome`, `senha`, `email`) VALUES (NULL, '$usuario', '$senha', '$email');";
	
	// erro de sql
	if (!mysqli_query($link, $sql)) {
		echo 'failed';
	}
	else {
		echo 'succes';
 }


?>