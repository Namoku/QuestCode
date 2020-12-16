<?php
	require_once "../config/config.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
			header("Content-Type: application/json");
			$array_devolver=[];
			$title = $_POST['title'];
			$post = $_POST['post'];
			$userid = $_POST['userid'];
			$topicid = $_POST['topicid'];

			$nuevo_user = $con->prepare("INSERT INTO posts (topic, username, title, post) VALUES(:topic, :username, :title, :post)");
			$nuevo_user->bindParam(':topic', $topicid, PDO::PARAM_STR);
			$nuevo_user->bindParam(':username', $userid, PDO::PARAM_STR);
			$nuevo_user->bindParam(':title', $title, PDO::PARAM_STR);
			$nuevo_user->bindParam(':post', $post, PDO::PARAM_STR);
			$nuevo_user->execute();

			$array_devolver['publicado']= true;
			echo json_encode($array_devolver);

	}else{
			exit("Fuera de aquí");
	}


?>
