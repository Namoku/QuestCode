var script_tag = document.getElementById('aux');
var auxId = script_tag.getAttribute("auxId");
var rank = script_tag.getAttribute("rank");
window.onload = function() {
	var script_tag = document.getElementById('aux');
	var auxBoolean = script_tag.getAttribute("auxBoolean");
	var script_tag = document.getElementById('aux');
	var auxCommentId = script_tag.getAttribute("auxCommentId");
	if (auxBoolean != "true")
		getPosts(auxId);
	else {
		getPost(auxId);
		getComments(auxCommentId);
	}
};

function getComments(topicId) {
	arrayAux = [];
	aux = "";
	$.ajax({
		url: '/config/getComments.php',
		data: {id: topicId},
		type: 'post',
		success: function(response) {
			for(var k in response) {
				respp = response;
				$.ajax({
					url: '/config/getUser.php',
					type: 'post',
					data: { userid: response[k].username},
					async: false,
					success: function(resp) {
						aux = resp.username;
						arrayAux.push(respp[k]);
					},
					error(eror){
						console.log(eror);
					}
				});
			}	
		if (arrayAux != [])
			for (k = arrayAux.length-1; k >= 0; k--) {
				post = `
				<div class="card bg-dark">
					<div class="card-header">@${aux} comentó en ${arrayAux[k].date}</div>
					<div class="card-body">
						<p class="card-text">${arrayAux[k].comment}</p>`
				if (rank >= 2)
					post +=
						`<a id="eliminarComentarioBtn" onclick="eliminarComentario(${arrayAux[k].id})" class="btn btn-dark">Eliminar comentario</a>
					</div>
				</div>
				<br>
			`;
				else
					post +=
						`
					</div>
				</div>
				<br>
			`;
			$('.comment-holder').append(post);
		}
		},
		error(){
			$('.comment-holder').append("Aun no hay ningun comentario...");
		}
	});
}
function comment(topicId, commentText) {
	console.log(commentText);
	$.ajax({
		url: '/config/comment.php',
		type: 'post',
		data: {id: topicId, comment: commentText},
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
}
