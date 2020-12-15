$(document).on("submit", "#login_form", function(event){
	event.preventDefault();
	var $form = $(this);
 
	var data_form = {
			username: $("input[type='text']",$form).val(),
			password: $("input[type='password']", $form).val() 
	}
	if(data_form.username.length < 6 ){
			$("#msg_error_login").text("Ingresa un usuario valido.").show();
			return false;        
	}else if(data_form.password.length < 1){
			$("#msg_error_login").text("La contraseña debe tener más de 8 carácteres.").show();
			return false;   
	}
	$("#msg_error_login").hide();
	var url_php = '../config/formlogin.php';

	$.ajax({
			type:'POST',
			url: url_php,
			data: data_form,
			dataType: 'json',
			async: true,
	})
	.done(function ajaxDone(res){
		 console.log(res); 
		 if(res.error !== undefined){
					$("#msg_error_login").html(res.error).show();
					return false;
		 } 
		 if(res.redirect !== undefined){
			 let timerInterval
			 Swal.fire({
				 title: 'Bienvenido ' + data_form.username + '!',
				 html: 'Serás redireccionado en unos segundos.',
				 timer: 2500,
				 timerProgressBar: true,
				 willOpen: () => {
					 Swal.showLoading()
					 timerInterval = setInterval(() => {
						 const content = Swal.getContent()
						 if (content) {
							 const b = content.querySelector('b')
							 if (b) {
								 b.textContent = Swal.getTimerLeft()
							 }
						 }
					 }, 100)
				 },
				 onClose: () => {
					 clearInterval(timerInterval)
				 }
			 }).then((result) => {
				 location.reload();
			 })
		 }
	})
	.fail(function ajaxError(e){
			console.log(e);
	})
	.always(function ajaxSiempre(){
			console.log('Final de la llamada ajax.');
	})
	return false;
});

function cerrarSesion() {
	Swal.fire({
		title: '¿Estás seguro?',
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Cerrar sesión',
		cancelButtonText: 'No'
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url: '../config/logout.php',
				type: 'post',
				success: function(response) { 
					console.log("heyhey");
				}, error: function(err) {
					console.log(err);
				}
			});
			Swal.fire({
				title: 'Sesión cerrada!',
				body: 'Cierra el mensaje para continuar.',
				icon: 'success',
				willClose: () => {
					location.reload();
				}
			});
		}
	})

}
