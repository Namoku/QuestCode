<?php
	require_once "../config/config.php";
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		header("Content-Type: application/json");
		$array_devolver=[];
		$email = strtolower($_POST['username']);
		$password = $_POST['password'];

		// comprobar si el user existe 
		$buscar_user = $con->prepare("SELECT * FROM users WHERE username = '$email' LIMIT 1");
		$buscar_user->bindParam(':email', $email, PDO::PARAM_STR);
		$buscar_user->execute();

		if($buscar_user->rowCount() == 1){
			// Existe
			$user = $buscar_user->fetch(PDO::FETCH_ASSOC);
			$user_id = (int) $user['id'];
			$hash = (string) $user['password'];
			$rank = (int) $user['rank'];
			if(password_verify($password,$hash)){
				if($rank==0) {
					$array_devolver['error']="Confirma tu correo antes de iniciar sesión.";
				} else {
					session_start();
					$_SESSION['id']=$user_id;
					$_SESSION['username']=$email;
					$_SESSION['rank'] = $rank;
					$array_devolver['redirect'] ='../';
				}
			} else {
				$array_devolver['error']="Uno de los datos es incorrecto.";
			}
		}else{
			$array_devolver['error']="Uno de los datos es incorrecto.";
		}

		echo json_encode($array_devolver);
	}else{
		exit("Fuera de aquí");
	}

?>
