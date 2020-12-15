<?php  session_start();
if (!isset($_SESSION['id'])) {
	header('Location: /403.php');
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>QuestCode! - Publicar</title>
	<?php include_once("../config/headers/headerForum.php") ?>
</head>
<body>
<div id="SITE_CONTAINER">
	<div class="container-fluid" style="background-color: #0F0F1A; color:#fff ;">
		<br>
		<h1 class="display-5 text-center mt-10"><strong>Publicar</strong></h1>
		<div class="container modal-login" style="width: 100% ;">
			<form class="modal-body modal-content mb-10" id="publicar" method="post">
				<div class="form-group">
					<div class="input-group">
						<input type="text" class="form-control" name="title" placeholder="Titulo" required="required">
					</div>
				</div>
				<div class="form-group">
					<textarea name="post" class="form-control" style="min-height: 25vh;" placeholder="Ingresa tu publicación aquí." required></textarea>
				</div>
				<?php echo('<input type="hidden" class="form-control" value="'.$_SESSION['id'].'" name="userid" required="required" disabled>');
					echo('<input type="hidden" class="form-control" value="'.$_GET['topic'].'" name="topicid" required="required" disabled>'); ?>
				<div class="form-group" style="margin-bottom: 0px!important;">
					<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Publicar</button>
				</div>
				<div id="msg_error_register" class="form-group alert alert-danger" role="alert" style="display: none; margin-top:20px ; margin-bottom:0px!important ;"></div>
			</form>
		<br>
	</div>
</div>
</body>
<footer>
	<?php include_once("../config/footer.php") ?>
	<script src="/js/app.js"></script>
</footer>
</html>
