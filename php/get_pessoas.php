<?php 

/*
* Este arquivo deve pegar todos os tweets do banco de dados 
* e colocá-los na página inicial
*/

session_start();

require_once('db.class.php');

// mais segurança
if ($_SESSION['usuario_id'] == null) {
	header("Location: ..");
	die();
}

$usuario_id = $_SESSION['usuario_id'];
$pessoa_nome = $_POST['pessoa-nome'];


$sql = "SELECT * FROM `usuarios` 
				WHERE 
				( 
					nome LIKE '%$pessoa_nome%' 
					OR email LIKE '%pessoa_nome%'
				)
				AND 
				id <> '$usuario_id'
				ORDER BY nome LIMIT 50
				";

$sql = "SELECT * FROM `usuarios` 
				WHERE 
				( 
					nome LIKE '%$pessoa_nome%' 
					OR email LIKE '%$pessoa_nome%'
				)
				AND 
				id <> '$usuario_id'
				ORDER BY nome LIMIT 50
				";

// coisas de conexão
$obj_db = new db();

$link = $obj_db->conecta_mysql();

// erro de sql
if (!mysqli_query($link, $sql)) {
	echo 'Erro na conexão com banco de dados';
	die();
}

// sql funcionando
$resultado = mysqli_query($link, $sql);

if ($resultado) {
	while ($registro = mysqli_fetch_assoc($resultado)) {
		?>
		<a class="list-group-item" href="javascript:void(0)">
				<strong><?= $registro['nome'] ?></strong>
				<strong><?= $registro['email'] ?></strong>
		</a>	
		<br>		
		<?php
	}
}