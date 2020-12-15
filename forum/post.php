<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>QuestCode! - Publicaciones</title>
	<?php include_once("../config/headers/headerForum.php") ?>
</head>
<body>
<div id="SITE_CONTAINER">
	<div class="container-fluid" style="background-color: #0F0F1A; color:#fff ;">
	<div class="container d-flex justify-content-center"> 
	</div>
		<div class="container" >
			<br>
			<div class="post-holder">
			</div>
			<br>
			<h2 class="display-6">Comentarios</h2>
			<div class="comment-holder">
			</div>
			<?php if($_SESSION) {
			echo('<a class="btn btn-dark" href="#comment" data-toggle="modal">Comentar</a>');
			if($_SESSION['rank'] >= 2) {
			echo('<a id="eliminarPostBtn" postId="'.$_GET['id'].'" class="btn btn-dark" style="margin-left: 5px;">Eliminar post</a>');
			}
			} ?>
		</div>
	</div>
</div>
</body>
<footer>
	<!-- Comment Modal -->
	<div id="comment" class="modal fade">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" style="margin:unset ;">Comentar</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
		<form id="comment_form" method="post">
			<div class="form-group">
				<div class="input-group">
					<textarea class="form-control" style="min-height:20vh; max-height:20vh;" name="comment" placeholder="Comentario" required="required"></textarea>
				</div>
			</div>	
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Comentar</button>
			</div>
		</form>
				</div>
				<div class="modal-footer">
					Recuerda de revisar todas las reglas antes de comentar.
					<div id="msg_error_comment" class="alert alert-danger" role="alert" style="display: none"></div>
				</div>
			</div>
		</div>
	</div>
	<script id="aux" src="/js/getPosts.js" rank="<?php echo($_SESSION['rank']); ?>" auxId="<?php echo($_GET['id']); ?>" auxBoolean="true" auxCommentId="<?php echo($_GET['id']); ?>"></script> <!-- Script para tener los temas  -->
	<script src="/js/getComments.js"></script> <!-- Script para tener los temas  -->
	<?php include_once("../config/footer.php") ?>
	<script src="/js/comment.js"></script>
<script src="/js/eliminarPost.js"></script>
<script src="/js/eliminarComentario.js"></script>
</footer>
</html>
