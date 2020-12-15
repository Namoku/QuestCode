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
		<h1 class="display-4 text-center"><strong>Temas</strong></h1>
		<div class="container">
		<div class="text-center">
		<?php if (isset($_SESSION['rank'])){
		if ($_SESSION['rank'] >= 2) {
		echo '<a href="#topic" data-toggle="modal" class="btn btn-dark">Agregar</a>';
		}
		} ?>
		</div>
				<div class="container topic-holder" id="topic_containers"><br>
				</div>
		</div> <br>
		<div class="container d-flex justify-content-center"> 
			<!-- <a href="/forum/publicar.php?topic=1" class="btn btn-dark"><h1 class="display-5">Publicar</h1></a> -->
		</div>
	</div>
</div>
</body>
<footer>
	<!-- Comment Modal -->
	<div id="topic" class="modal fade">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" style="margin:unset ;">Tema</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
		<form id="topic_form" method="post">
			<div class="form-group">
				<div class="input-group">
					<input type="text" class="form-control" name="title" placeholder="Titulo" required="required">
				</div>
				<div class="input-group">
					<textarea class="form-control" style="min-height:10vh; max-height:10vh;" name="comment" placeholder="Descripcion" required="required"></textarea>
				</div>
			</div>	
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Agregar</button>
			</div>
		</form>
				</div>
			</div>
		</div>
	</div>
	<script src="/js/getTopics.js"></script> <!-- Script para tener los temas  -->
	<?php include_once("../config/footer.php") ?>
	<script src="/js/agregar.js"></script>
</footer>
</html>
