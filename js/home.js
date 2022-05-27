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
			// fim de conecta com script php que faz a conexão
	
		}

		// limpa o campo após novo tweet
		$('#texto-tweet').val() = ''

	}) // click

	// atualizar os tweets de forma dinâmica na página
	function atualizaTweets() {		
		$.ajax({			
			url: 'php/get_tweets.php',
			success: function(data) {
				$("#tweets").html(data)				
			}
		})		
	}
	// fim de atualizar os tweets de forma dinâmica na página

	atualizaTweets()

}) // ready