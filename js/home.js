$(document).ready( function() {

	// clique no botão de postar tweet
	$('#btn-tweet').click( function() {

		// impede de postar tweet em branco
		if ($('#texto-tweet').val() != '') {
		
			// conecta com script php que faz a conexão
			$.ajax({
				url: 'php/add_tweet.php',
				method: 'post',
				data: $('#form-tweet').serialize(),
				success: function(data) {
					alert('Tweet incluído com sucesso')

					// limpa campo de novo tweet
					$('#texto-tweet').val('')
				}

			})

	
		}

		// limpa o campo após novo tweet
		$('#texto-tweet').val() = ''

	}) // click

}) // ready