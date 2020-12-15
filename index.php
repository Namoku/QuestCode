<?php  session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>QuestCode!</title>
    <?php include_once($_SERVER['DOCUMENT_ROOT']."/config/headers/headerHome.php") ?>
  </head>
  <body>
    <div id="SITE_CONTAINER" class="text-light">
      <div class="jumbotron d-flex align-items-center jumbotron-fluid mb-0" style="min-height: 75vh; background-color: #4a4e69; background-image: url(assets/cover.jpg); background-position: center;">
	<div class="text-center container">
	  <h1 class="display-3"><strong>QuestCode!</strong></h1>
	  <p class="lead"><a href="#register" data-toggle="modal">Unirse</a></p>
	</div>
      </div>
    </div>
  </body>
  <footer>
    <?php include_once("config/footer.php") ?>
  </footer>
</html>
