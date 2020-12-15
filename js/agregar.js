$(document).on("submit", "#topic_form", function(event){
	event.preventDefault();
	var $form = $(this);
 
	var data_form = {
		title: $("input",$form).val(),
		descripcion: $("textarea",$form).val()
	}
	$.ajax({
		url: '/config/agregar.php',
		type: 'post',
		data: {topic: data_form.title, desc: data_form.descripcion},
		success: function(resp) {
			 Swal.fire({
				 title: 'Listo!',
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
		},
		error(e) {
			console.log(e);
			Swal.fire({
				icon: 'error',
				title: 'Error',
				text: 'Algo salió mal!'
			})
		}
	});
});
