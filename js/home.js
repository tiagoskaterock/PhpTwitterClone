$(document).ready( function() {

	// clique no botão de postar tweet
	$('#btn-tweet').click( function() {

		// impede de postar tweet em branco
		if ($('#texto-tweet').val() != '') {
			alert($('#texto-tweet').val())			
		}

	})

})