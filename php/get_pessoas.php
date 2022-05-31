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
		<p class="list-group-item">
			<strong><?= $registro['nome'] ?></strong>
			<smail style="font-size: 0.9em;"><?= $registro['email'] ?></smail>

			<?php 

				$registro_id = $registro['id'];
			
			  // conferindo se mostra botão seguir ou deixra de seguir
			  $sql2 = "SELECT * FROM seguidores 
			  	WHERE segue_id = $usuario_id
			  	AND seguindo_id = $registro_id";

				// coisas de conexão
				$obj_db2 = new db();

				$link2 = $obj_db2->conecta_mysql();

				$result = mysqli_query($link2, $sql2);

				$seguindo = false;

				// deixar de seguir
				if ($result->num_rows > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						$seguindo = true;
					} // fim while
				} // fim if 

			
			?>

			<span style="float: right; margin-top: -5px;">
				<!-- botão deixar de seguir -->
				<a href="javascript:void(0)" 
					class="btn btn-sm btn-default btn-deixar-de-seguir" 
					data-id_usuario="<?php echo $registro['id'] ?>"
					id="btn-deixar-de-seguir-<?= $registro['id'] ?>">
					Deixar de Seguir
				</a>					
			</span>

			<span style="float: right; margin-top: -5px; <?php if($seguindo){echo 'display: none';} else{echo 'display:  block';}  ?>">
				<!-- botão seguir -->
				<a href="javascript:void(0)" 
					class="btn btn-sm btn-primary btn-seguir" 					
					data-id_usuario="<?php echo $registro['id'] ?>"
					id="btn-seguir-<?= $registro['id'] ?>">
					Seguir
				</a>									
			</span>




			

		</p>	

		<br>		
		<?php
	}
}