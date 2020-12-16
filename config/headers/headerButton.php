<?php
	if(isset($_SESSION['id']) && $_SESSION['id'] != "") {
		echo '<a class="nav-item nav-link" href="#" onClick="cerrarSesion()">Cerrar sesión de @'.$_SESSION['username'].'</a>';
	} else { 
		echo '<a class="nav-item nav-link" href="#login" data-toggle="modal">Inicar sesión</a>';
	}	
?>
