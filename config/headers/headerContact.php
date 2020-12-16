<?php include_once($_SERVER['DOCUMENT_ROOT']."/config/headers/header.php") ?>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #22223b; min-height: 80px; box-shadow: 0 2px 4px 0 #281c5e;">
  <div class="container">
    <a class="navbar-brand" href="#">
      <!-- Brand with icon -->
      <img src="/assets/icon/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
      QuestCode!
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
	<a class="nav-item nav-link" href="/">Inicio</a>
	<a class="nav-item nav-link" href="/forum/">Foro</a>
	<a class="nav-item nav-link" href="/about/">Acerca de</a>
	<a class="nav-item nav-link" href="/rules/">Reglas</a>
	<a class="nav-item nav-link active" href="#"><span class="sr-only">(current)</span>Contacto</a>
	<a class="nav-item nav-link" href="/members/">Miembros</a>
	<?php
		include_once("headerButton.php");
	?>
      </div>
    </div>
  </div>
</nav>
