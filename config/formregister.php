<?php
	require_once "../config/config.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
			header("Content-Type: application/json");
			$array_devolver=[];
			$username = $_POST['username'];
			$email = $_POST['email'];
			$token = bin2hex(openssl_random_pseudo_bytes(16));

			// comprobar si el user existe 
			$buscar_user = $con->prepare("SELECT * FROM users WHERE username = '$username' LIMIT 1");
			$buscar_user->bindParam(':username', $username, PDO::PARAM_STR);
			$buscar_user->execute();
			$buscar_user2 = $con->prepare("SELECT * FROM users WHERE email = '$email' LIMIT 1");
			$buscar_user2->bindParam(':email', $email, PDO::PARAM_STR);
			$buscar_user2->execute();

			if($buscar_user->rowCount() == 1){
					// Existe
					$array_devolver['error'] = "Este usuario ya existe.";
					$array_devolver['is_login']= false;
			} else if($buscar_user2->rowCount() == 1){
					// Existe
					$array_devolver['error'] = "Este email ya está registrado.";
					$array_devolver['is_login']= false;
			}else{
					$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$nuevo_user = $con->prepare("INSERT INTO users (username, email, password, registertoken) VALUES(:username, :email, :password, :token)");
					$nuevo_user->bindParam(':username', $username, PDO::PARAM_STR);
					$nuevo_user->bindParam(':email', $email, PDO::PARAM_STR);
					$nuevo_user->bindParam(':password', $password, PDO::PARAM_STR);
					$nuevo_user->bindParam(':token', $token, PDO::PARAM_STR);
					$nuevo_user->execute();

					$user_id = $con->lastInsertId();
					$_SESSION['register_id']= (int) $user_id;
					$_SESSION['token']= (string) $token;
					$_SESSION['email']= (string) $email;
					include('../mails/sendmail.php');
			}
			echo json_encode($array_devolver);

	}else{
			exit("Fuera de aquí");
	}


?>
