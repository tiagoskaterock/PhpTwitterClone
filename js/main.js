$(document).ready( function() {
	// verificar se os campos de usuário e senha foram devidamente preenchidos
	$('#btn_login').click( function() {

		var campo_vazio = false
		
		// usuário
		if ($("#campo_usuario").val() == '') {
			campo_vazio = true;
			// estilo de usuario para erro
			$("#campo_usuario").css('border', '1px solid #f00');			
		}
		else {
			// usuario esilo original
			$("#campo_usuario").css('border', '1px solid #ccc');			
		}

		// senha
		if ($("#campo_senha").val() == '') {
			// estilo de senha para erro
			$("#campo_senha").css('border', '1px solid #f00');			
			campo_vazio = true;
		}
		else {
			// senha esilo original
			$("#campo_senha").css('border', '1px solid #ccc');						
		}

		// impede o botão de executar a ação de disparar submit do formulário
		if (campo_vazio) return false

	}) // #btn_login.click()

}) // document.ready()