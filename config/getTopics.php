<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/config/config.php";
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		header("Content-Type: application/json");
		// comprobar si el user existe 
		$buscar_user = $con->prepare("SELECT * FROM topic");
		$buscar_user->execute();

		if($buscar_user->rowCount() >= 1){
			// Existe
			echo json_encode($buscar_user->fetchAll(PDO::FETCH_ASSOC));
		}else{
			exit("failll de aquí");
		}
	}
?>
