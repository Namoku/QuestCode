<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Document</title>
		<?php include_once("config/headers/headerHome.php") ?>
	</head>
	<body>
		<div id="SITE_CONTAINER">
			<div class="container-fluid" style="background-color: #0F0F1A; color:#fff ;">
				<br>
				<h1 class="display-5 text-center mt-10"><strong>Acceso restringido</strong></h1>
				<blockquote class="blockquote text-center">
					<p class="mb-0">Algunas funciones sólo son para usuarios registrados, inicia sesión para continuar.</p>
					<footer class="blockquote-footer">QuestCode!</footer>
				</blockquote>
				<div id="login" >
					<div class="modal-dialog modal-login">
						<div class="modal-content">
							<div class="modal-header">
								<div class="avatar">
									<img src="https://www.tutorialrepublic.com/examples/images/avatar.png" alt="Avatar">
								</div>
								<h4 class="modal-title">Iniciar Sesión</h4>
							</div>
							<div class="modal-body">
								<form id="login_form" method="post">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text form-control" id="basic-addon1">@</span>
											</div>
											<input type="text" class="form-control" name="username" placeholder="Usuario" required="required">
										</div>
									</div>	
									<div class="form-group">
										<input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
									</div>
									<div class="form-group">
										<a style="text-align:center; display:block" href="#">¿Olvidaste tu contraseña?</a><br>
										<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Iniciar Sesión</button>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<a href="#register" data-toggle="modal" data-target="#register" data-dismiss="modal">¿Eres nuevo? Registrate</a>
								<div id="msg_error_login" class="alert alert-danger" role="alert" style="display: none"></div>
							</div>
						</div>
					</div>
				</div>
				<br>
			</div>
	</body>
	<footer>
		<?php include_once("config/footer.php") ?>
	</footer>
</html>
