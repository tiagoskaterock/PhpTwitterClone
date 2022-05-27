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

$sql = "SELECT * FROM `tweets` INNER JOIN usuarios WHERE tweets.usuario_id = '$usuario_id' AND usuarios.id = '$usuario_id' ORDER BY data_inclusao DESC";

// coisas de conexão
$obj_db = new db();

$link = $obj_db->conecta_mysql();

// erro de sql
if (!mysqli_query($link, $sql)) {
	echo 'Não foi possível inserir o novo tweet';
	die();
}

// sql funcionando
$resultado = mysqli_query($link, $sql);

if ($resultado) {
	while ($registro = mysqli_fetch_assoc($resultado)) {
		?>
		<a class="list-group-item" href="javascript:void(0)">
			<h4 class="lit-group-item-heading">
				<?= $registro['nome'] ?> - 
				<small>
					<?php 										 
						$tempo = strtotime($registro['data_inclusao']);
						$dia = date("d/m/Y - h:i", $tempo);
					?>
					<?= $dia ?>
				</small>			
			</h4>

			<p class="lit-group-item-text">
				<?= $registro['conteudo'] ?>
			</p>
		</a>			
		<?php
	}
}