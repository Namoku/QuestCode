<?php
	session_start();
	require_once "../config/config.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		header("Content-Type: application/json");
		$array_devolver=[];
		$topic = $_POST['topic'];
		$descripcion = $_POST['desc'];

		$nuevo_user = $con->prepare("INSERT INTO topic (topic, description) VALUES(:topic, :descripcion)");
		$nuevo_user->bindParam(':topic', $topic, PDO::PARAM_STR);
		$nuevo_user->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
		$nuevo_user->execute();

		echo json_encode($array_devolver);
	}else{
			exit("Fuera de aquí");
	}


?>
