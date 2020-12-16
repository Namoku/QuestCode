<?php
	session_start();
	require_once "../config/config.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		header("Content-Type: application/json");
		$array_devolver=[];
		$id = $_POST['id'];
		$comment = $_POST['comment'];
		$username = $_SESSION['id'];

		$nuevo_user = $con->prepare("INSERT INTO comments (post, username, comment) VALUES(:post, :username, :comment)");
		$nuevo_user->bindParam(':post', $id, PDO::PARAM_STR);
		$nuevo_user->bindParam(':username', $username, PDO::PARAM_STR);
		$nuevo_user->bindParam(':comment', $comment, PDO::PARAM_STR);
		$nuevo_user->execute();

		echo json_encode($array_devolver);
	}else{
			exit("Fuera de aquí");
	}


?>
