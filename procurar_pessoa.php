<?php 
	
	session_start();

	// se não existir sessão volta para início
	if (!isset($_SESSION['usuario_nome'])) {
		header("Location: .");
	}

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Twitter Clone - Home</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<script src="js/procurar_pessoa.js"></script>
	
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
	            <li><a href=".">Início</a></li>
	            <li><a href="home">Home</a></li>
	            <li><a href="php/sair.php">Logout</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">
	    	
	    	<!-- Coluna 1 esquerda -->
	    	<div class="col-md-3">
	    		<div class="panel panel-default">
	    			<div class="panel-body">
	    				<h4>
	    					<?= $_SESSION['usuario_nome'] ?>	    					
	    				</h4>

	    				<hr>

	    				<div class="col-md-6">
	    					Tweets
	    					<br>
	    					69
	    				</div>

	    				<div class="col-md-6">
	    					Seguidores
	    					<br>
	    					6969
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    	<!-- Fim Coluna 1 esquerda -->



	    	<!-- Coluna 2 -->
	    	<div class="col-md-6">	    
	    		<div class="panel panel-default">
	    			<div class="panel-body">
	    				
	    				<form class="input-group" id="form-procurar-pessoa" method="post" action="">
	    					<input type="text" name="pessoa-nome" id="texto-procurar-pessoa" class="form-control" placeholder="Procurar Pessoa" maxlength="140">
	    					<span class="input-group-btn">
	    						<button class="btn btn-primary" id="btn-procurar-pessoa" type="button">Procurar</button>
	    					</span>
	    				</form>

	    			</div>
	    		</div>




	    		<!-- tweets -->
	    		<div class="list-group" id="pessoas"></div>
	    		<!-- fim de tweets -->


				</div>



	    	<!-- Coluna 3 -->
			<div class="col-md-3"></div>
				<div class="panel panel-default">
	    			<div class="panel-body">
	    				
	    				

	    			</div>
	    		</div>
			</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>