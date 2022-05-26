<?php

require_once('db.class.php');

$usuario = $_POST['usuario'];
$email = $_POST['email'];

//confirma se usuario ou email já existem
$confere_db = new db();

$confere_link = $confere_db->conecta_mysql();

$confere_sql = "SELECT * FROM usuarios WHERE email = '$email' OR nome = '$usuario'";

// se tiver um ou mais registros com mesmo nome ou email retorna true
$usuario_existe = mysqli_query($confere_link, $confere_sql)->num_rows;

// se usuário já existir matar script
if ($usuario_existe) {
	header("Location: ../inscrevase?erro=usuario_ja_cadastrado");
	die();
}

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