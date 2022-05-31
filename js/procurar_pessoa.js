$(document).ready( function() {

	// clique no botão de postar tweet
	$('#btn-procurar-pessoa').click( function() {

		// se houver algo digitado no campo
		if ($('#texto-procurar-pessoa').val() != '') {
					
			// conecta com script php que faz a conexão
			$.ajax({
				url: 'php/get_pessoas.php',
				method: 'post',
				data: $('#form-procurar-pessoa').serialize(),
				success: function(data) {
					$('#pessoas').html(data)
					
					$('.btn-seguir').click(function() {
						let id_usuario = $(this).data('id_usuario')
						
						$.ajax({

							url: 'php/seguir.php',
							method: 'post',
							data: {	seguir_id_usuario: id_usuario	},
							success: function(data) {
								alert(data)
							}

						})

					})					

				}

			})
			
			// fim de conecta com script php que faz a conexão
	
		}


	}) // click





}) // ready