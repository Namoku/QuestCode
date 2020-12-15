<?php 
	require_once "config/config.php";
if(isset($_GET['token']) && isset($_GET['userid'])){
    $token = $_GET['token'];
    $userId = $_GET['userid'];
    
    $buscar_user = $con->prepare("SELECT * FROM users WHERE id = :user_id AND registertoken = :token LIMIT 1");
    $buscar_user->bindParam(':user_id', $userId, PDO::PARAM_STR);
    $buscar_user->bindParam(':token', $token, PDO::PARAM_STR);
    $buscar_user->execute();
    
    if($buscar_user->rowCount() == 1){
			$buscar_user = $con->prepare("UPDATE users SET registertoken = '' WHERE users.id = :user_id");
			$buscar_user->bindParam(':user_id', $userId, PDO::PARAM_STR);
			$buscar_user->execute();
			$buscar_user = $con->prepare("UPDATE users SET rank = 1 WHERE users.id = :user_id");
			$buscar_user->bindParam(':user_id', $userId, PDO::PARAM_STR);
			$buscar_user->execute();
			echo "Usuario confirmado! Regresa a la pagina para iniciar sesion.";
		} else{
			echo "Token invalido.";
    }
    
}?>
