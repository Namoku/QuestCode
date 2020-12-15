<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>QuestCode! - Miembros</title>
	<?php include_once("../config/headers/headerMembers.php") ?>
</head>
<body>
<div id="SITE_CONTAINER">
	<div class="container-fluid" style="background-color: #0F0F1A; color:#fff ;">
		<h1 class="display-4 text-center"><strong>Miembros</strong></h1>
		<div class="container">
		<div class="text-center">
		</div>
				<div class="container member-holder" id="topic_containers"><br>
				</div>
		</div> <br>
		<div class="container d-flex justify-content-center"> 
			<!-- <a href="/forum/publicar.php?topic=1" class="btn btn-dark"><h1 class="display-5">Publicar</h1></a> -->
		</div>
	</div>
</div>
</body>
<footer>
	<?php include_once("../config/footer.php") ?>
	<script src="/js/getMembers.js"></script>
</footer>
</html>
