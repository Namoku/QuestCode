var script_tag = document.getElementById('eliminarPostBtn');
var postId = script_tag.getAttribute("postId");
document.getElementById("eliminarPostBtn").onclick = function() {eliminar(postId)};

function eliminar(id) {
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
				url: '/config/eliminarPost.php',
				type: 'post',
				data: {topic: id},
				success: function(resp) {
					Swal.fire(
						'Eliminado!',
						'Se ha eliminado correctamente.',
						'success'
					).then(function() {
						window.history.back();
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
