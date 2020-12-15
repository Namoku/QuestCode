var script_tag = document.getElementById('eliminarBtn');
var idTopic = script_tag.getAttribute("idTopic");
document.getElementById("eliminarBtn").onclick = function() {eliminar(idTopic)};

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
				url: '/config/eliminar.php',
				type: 'post',
				data: {topic: id},
				success: function(resp) {
					Swal.fire(
						'Eliminado!',
						'Se ha eliminado correctamente.',
						'success'
					).then(function(){
						window.history.back();
					})
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
