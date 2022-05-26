<?php

require_once('db.class.php');

$usuario = $_POST['usuario'];
$email = $_POST['email'];

// criando hash para senha
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); 

// coisas de conexão
$obj_db = new db();

$link = $obj_db->conecta_mysql();

$sql = "INSERT INTO `usuarios` (`id`, `nome`, `senha`, `email`) VALUES (NULL, '$usuario', '$senha', '$email');";

// erro de sql
if (!mysqli_query($link, $sql)) {
	echo 'Não foi possível cadastrar o novo usuário';
	die();
}

//segue se tudo der certo
echo 'succes';

header("Location: ..");