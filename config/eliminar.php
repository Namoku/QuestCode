<?php
	session_start();
	require_once "../config/config.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		header("Content-Type: application/json");
		$array_devolver=[];
		$id = $_POST['topic'];

		$nuevo_user = $con->prepare("DELETE FROM topic WHERE id=:id");
		$nuevo_user->bindParam(':id', $id, PDO::PARAM_STR);
		$nuevo_user->execute();
		$nuevo_user = $con->prepare("DELETE FROM posts WHERE topic=:id");
		$nuevo_user->bindParam(':id', $id, PDO::PARAM_STR);
		$nuevo_user->execute();
		echo json_encode($array_devolver);
	}else{
			exit("Fuera de aquí");
	}
?>
