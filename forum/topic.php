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
	<h1 class="display-4 text-center"><strong><?php echo($_GET['topic']) ?> - Publicaciones</strong></h1>
	<div class="container d-flex justify-content-center"> 
		<a href="/forum/publicar.php?topic=<?php echo($_GET['id']) ?>" class="btn btn-dark" style="margin-right: 5px;"><h3 class="display-6">Publicar</h1></a>
<?php 
if (isset($_SESSION['rank'])) {
	if ($_SESSION['rank'] >= 3) {
		echo '<a id="eliminarBtn" idTopic="'.$_GET['id'].'" class="btn btn-dark"><h3 class="display-6">Eliminar</h1></a>';
	}
}
?>
	</div>
		<div class="container" >
				<br>
				<div class="row card-holder" id="posts_containers">
				</div>
		</div>
	</div>
</div>
</body>
<footer>
	<script id="aux" src="/js/getPosts.js" auxId="<?php echo($_GET['id']); ?>"></script> <!-- Script para tener los temas  -->
	<?php include_once("../config/footer.php") ?>
		<script src="/js/eliminar.js"></script>
</footer>
</html>
