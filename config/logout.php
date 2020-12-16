<?php
header("Content-Type: application/json");
$array_devolver=[];
session_start();
if(isset($_SESSION['id']) && $_SESSION['id'] != "") {
	session_destroy();
	$array_devolver['redirect'] ='../';
	echo json_encode($array_devolver);
}
?>
