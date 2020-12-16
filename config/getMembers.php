<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/config/config.php";
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		header("Content-Type: application/json");
		$array_devolver=[];
		// comprobar si el user existe 
		$buscar_user = $con->prepare("SELECT id, username, rank FROM users ORDER BY id DESC LIMIT 20");
		$buscar_user->execute();

		if($buscar_user->rowCount() >= 1){
			// Existe
			echo json_encode($buscar_user->fetchAll(PDO::FETCH_ASSOC));
		}else{
			exit("Fuera de aquí");
		}
	}
?>
