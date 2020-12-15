$(document).on("submit", "#publicar", function(event){
	event.preventDefault();
	var $form = $(this);
 
	var data_form = {
		title: $("input[type='text']",$form).val(),
		post: $("textarea",$form).val(),
		userid: $("input[type='hidden'][name='userid']", $form).val(), 
		topicid: $("input[type='hidden'][name='topicid']", $form).val()
	}
	if(data_form.title.length < 6) {
		$("#msg_error_register").text("Ingresa un título mayor a 6 carácteres.").show();
		return false;
	}else if(data_form.post.length < 50 ){
		$("#msg_error_register").text("Tu post es muy corto, prueba escribiendo más.").show();
		return false;        
	}
	$("#msg_error_register").hide();
	var url_php = '../config/formpublicar.php';

	$.ajax({
		type:'POST',
		url: url_php,
		data: data_form,
		dataType: 'json',
		async: true,
		success: function(res) {
			Swal.fire({
				icon: 'success',
				title: 'Listo!',
				text: 'Ahora ya puedes ver tu post!',
				willClose: () => {
					window.history.back();
				},
			});
		},
		error: function(err) {
			console.log(err);
		}
	})
	});
