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

						// esconde botão de seguir ao clicar e mostra botão deixar de seguir
						$('#btn-seguir-' + id_usuario).hide();
						$('#btn-deixar-de-seguir-' + id_usuario).show();
						
						$.ajax({

							url: 'php/seguir.php',
							method: 'post',
							data: {	seguir_id_usuario: id_usuario	},
							success: function(data) {
								alert(data)
							}

						})

					}) // fim de btn-seguir




					$('.btn-deixar-de-seguir').click(function() {
						let id_usuario = $(this).data('id_usuario')

						// mostra botão de seguir ao clicar e esconde botão deixar de seguir
						$('#btn-deixar-de-seguir-' + id_usuario).hide();
						$('#btn-seguir-' + id_usuario).show();
						
						$.ajax({

							url: 'php/deixar_de_seguir.php',
							method: 'post',
							data: {	seguir_id_usuario: id_usuario	},
							success: function(data) {
								alert(data)
							}

						})

					}) // fim de btn-deixar-de-seguir				





				}

			}) // fim de conecta com script php que faz a conexão
	
		}

	}) // click

}) // ready