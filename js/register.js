$(document).on("submit", "#register_form", function(event){
	event.preventDefault();
	var $form = $(this);
 
	var data_form = {
		username: $("input[type='text']",$form).val(),
		email: $("input[type='email']",$form).val(),
		password: $("input[type='password']", $form).val(), 
		password2: $("input[type='password'][name='password2']", $form).val()
	}
	if(data_form.username.length < 6) {
		$("#msg_error_register").text("Ingresa un usuario mayor a 6 caracteres.").show();
		return false;
	}else if(/\s/g.test(data_form.username)) {
		$("#msg_error_register").text("Ingresa un usuario sin cáracteres inválidos.").show();
		return false;
	}else if(data_form.email.length < 6 ){
		$("#msg_error_register").text("Necesitamos un email valido.").show();
		return false;        
	}else if(data_form.password.length < 8){
		$("#msg_error_register").text("Tu password debe ser minimo de 8 caracteres.").show();
		return false;   
	}else if(data_form.password != data_form.password2) {
		$("#msg_error_register").text("Las contraseñas no coinciden.").show();
		return false;        
	}
	$("#msg_error_register").hide();
	var url_php = '../config/formregister.php';

	$.ajax({
			type:'POST',
			url: url_php,
			data: data_form,
			dataType: 'json',
			async: true,
		success: function(res) {
		}
	})
	.done(function ajaxDone(res){
		 if(res.error !== undefined){
					$("#msg_error_register").text(res.error).show();
					return false;
		 } 

		 
	})
	.fail(function ajaxError(e){
	})
	.always(function ajaxSiempre(res){
			console.log('Final de la llamada ajax.');
		if(res.error == undefined){
			Swal.fire({
				icon: 'success',
				title: 'Registrado!',
				text: 'Revisa tu correo para confirmar tu cuenta, recuerda revisar también el spam!',
				willClose: () => {
					location.reload();
				}
			});
	}
	})
	return false;
});
