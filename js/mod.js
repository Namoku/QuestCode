function hacerMod(id) {
	Swal.fire({
		title: 'Estas seguro?',
		text: "Solo un administrador podra deshacer este cambio",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Si!'
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({ 
				url: '/config/hacerMod.php',
				type: 'post',
				data: {topic: id},
				success: function(resp) {
					Swal.fire(
						'Listo!',
						'Se ha cambiado correctamente.',
						'success'
					).then(function(){
						// window.history.back();
						console.log(resp);
					})
				},
				error(e) {
					console.log(e);
					Swal.fire(
						'Error!',
						'No se pudo cambiar.',
						'error'
					)
				}
			});
		}
	})
}
