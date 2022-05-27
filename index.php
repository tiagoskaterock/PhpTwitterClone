<?php 

	session_start();

  if (isset($_GET['erro'])) {
  	$erro = $_GET['erro'];
  }

?>


<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">

	<title>Twitter clone</title>

	<!-- jquery - link cdn -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

	<!-- bootstrap - link cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	


	<script src="js/main.js"></script>


	</head>

	<body>

		<!-- Static navbar -->
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<img src="imagens/icone_twitter.png" />
				</div>

				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">

						<?php if (!isset($_SESSION['usuario_id'])): ?>
							<li><a href="inscrevase">Inscrever-se</a></li>							
						<?php endif ?>

						<li class="<?= $erro ? 'open' : ''; ?>">

							<?php if (isset($_SESSION['usuario_id']) && $_SESSION['usuario_id']): ?>
								<a id="entrar" data-target="#" href="home">Entrar</a>								
								<li><a href="php/sair.php">Logout</a>								</li>
							<?php endif ?>

							<?php if (!isset($_SESSION['usuario_id'])): ?>
								<a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>								
							<?php endif ?>

							<ul class="dropdown-menu" aria-labelledby="entrar">
								<div class="col-md-12">
									<p>Você possui uma conta?</h3>
										<br />

										<?php include 'includes/modal_entrar.php' ?>	

										<?php if (isset($erro)): ?>
											<?php if ($erro == 1): ?>
												<p class="alert alert-warning">
													Usuário ou senha inválidos
												</p>														
											<?php endif ?>

											<?php if ($erro == 2): ?>
												<p class="alert alert-warning">
													Usuário e senha em branco
												</p>							
											<?php endif ?>

											<?php if ($erro == 3): ?>
												<p class="alert alert-warning">
													Usuário em branco
												</p>							
											<?php endif ?>

											<?php if ($erro == 4): ?>
												<p class="alert alert-warning">
													Senha em branco
												</p>							
											<?php endif ?>



										<?php endif ?>									

								</ul>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>


			<div class="container">

				<!-- Main component for a primary marketing message or call to action -->
				<div class="jumbotron">
					<h1>Bem vindo ao twitter clone</h1>
					<p>Veja o que está acontecendo agora...</p>
				</div>

				<div class="clearfix"></div>
			</div>


		</div>



		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</body>
	</html>