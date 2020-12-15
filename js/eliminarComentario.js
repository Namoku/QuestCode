// var script_tag = document.getElementById('eliminarComentarioBtn');
// var commentId = script_tag.getAttribute("commentId");
// document.getElementById("eliminarComentarioBtn").onclick = function() {eliminarComentario(commentId)};

function eliminarComentario(id) {
	Swal.fire({
		title: 'Estas seguro?',
		text: "No hay forma de revertir esto, se borrara todo su contenido!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Eliminar!'
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({ 
				url: '/config/eliminarComentario.php',
				type: 'post',
				data: {topic: id},
				success: function(resp) {
					Swal.fire(
						'Eliminado!',
						'Se ha eliminado correctamente.',
						'success'
					).then(function() {
						location.reload();
					});
				},
				error(e) {
					console.log(e);
					Swal.fire(
						'Error!',
						'No se pudo eliminar.',
						'error'
					)
				}
			});
		}
	})
}
