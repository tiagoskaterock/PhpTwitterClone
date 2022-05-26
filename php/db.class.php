<?php

	class db
	{
		
		//host
		private $host = 'localhost';

		//usuario
		private $usuario = 'tiago';

		//senha
		private $senha = '123';

		//banco de dados
		private $database = 'twitter_clone';


		public function conecta_mysql(){

			// cria a conexão
			$conn = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

			// ajusta o charset de comunicação entre aplicação e banco de dados
			mysqli_set_charset($conn, 'utf8');

			// verifica se houve erro de conexão
			if (mysqli_connect_errno()) {
				echo 'Erro ao tentar se conectar com o banco de dados. Erro: ' . mysqli_connect_error();
			}

			return $conn;

		}


	}


?>