<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/config/config.php";
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		header("Content-Type: application/json");
		$array_devolver=[];
		$id = $_POST['userid'];
		// comprobar si el user existe 
		$buscar_user = $con->prepare("SELECT * FROM users WHERE id = '$id' LIMIT 1");
		$buscar_user->execute();

		if($buscar_user->rowCount() >= 1){
			// Existe
			$user = $buscar_user->fetch(PDO::FETCH_ASSOC);
			$username = (string) $user['username'];
			$array_devolver['username'] = $username;
			echo json_encode($array_devolver);
		}else{
			exit("Fuera de aquí");
		}
	}
?>
