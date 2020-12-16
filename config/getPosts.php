<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/config/config.php";
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		header("Content-Type: application/json");
		$array_devolver=[];
		$id = $_POST['id'];
		// comprobar si el user existe 
		$buscar_user = $con->prepare("SELECT * FROM posts WHERE topic = '$id' ORDER BY id DESC LIMIT 12");
		$buscar_user->execute();

		if($buscar_user->rowCount() >= 1){
			// Existe
			echo json_encode($buscar_user->fetchAll(PDO::FETCH_ASSOC));
		}else{
			exit("Fuera de aquí");
		}
	}
?>
