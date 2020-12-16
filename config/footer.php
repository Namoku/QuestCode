<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="/js/jquery-3.5.1.min.js"></script>
<script src="/js/login.js"></script>
<script src="/js/register.js"></script>
<link rel="stylesheet" href="/node_modules/@sweetalert2/theme-dark/dark.css">
<script src="/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
<div class="text-light">
	<div class="jumbotron d-flex align-items-center jumbotron-fluid mb-0" style="min-height: 50vh; background-color: #000;">
		<div class="text-center container">
			<h1 class="display-4">Conocenos!</h1>
			<p class="lead">Conoce el foro, es la mejor opción para hablar de programación.</p>
		</div>
	</div>
	<div class="container-fluid" style="background-color: #171038; min-height: 45vh;">
		<div class="row d-flex align-items-center" style="min-height: 45vh;">
			<div class="col-lg h-100">
				<div class="text-center h-100">
					<div class="">
						<h1 class="display-4">Acerca de</h1>
					</div>
				</div>
			</div>
			<div class="col-lg h-100">
				<div class="text-center h-100">
					<div class="">
						<h1 class="display-4">Reglas</h1>
					</div>
				</div>
			</div>
			<div class="col-lg h-100">
				<div class="text-center h-100">
					<div class="">
						<h1 class="display-4">Contactanos</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<!-- Register Modal -->
<div id="register" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">
	<div class="avatar">
	  <img src="https://www.tutorialrepublic.com/examples/images/avatar.png" alt="Avatar">
	</div>
	<h4 class="modal-title">Registrarse</h4>
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
	<form id="register_form" method="post">
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text form-control" id="basic-addon1">@</span>
				</div>
				<input type="text" class="form-control" name="username" placeholder="Usuario" required="required">
			</div>
		</div>
		<div class="form-group">
	    <input type="email" class="form-control" name="email" placeholder="Correo" required="required">
	  </div>
	  <div class="form-group">
	    <input type="password" class="form-control" name="password1" placeholder="Contraseña" required="required">
	  </div>
	  <div class="form-group">
	    <input type="password" class="form-control" name="password2" placeholder="Repetir contraseña" required="required">
	  </div>
	  <div class="form-group">
	    <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Registrarse</button>
	  </div>
	</form>
      </div>
			<div class="modal-footer">
				¡Registrase es muy sencillo!
				<div id="msg_error_register" class="alert alert-danger" role="alert" style="display: none"></div>
      </div>
    </div>
  </div>
</div>
<!-- Login Modal -->
<div id="login" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">
	<div class="avatar">
	  <img src="https://www.tutorialrepublic.com/examples/images/avatar.png" alt="Avatar">
	</div>
	<h4 class="modal-title">Iniciar Sesión</h4>
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
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
