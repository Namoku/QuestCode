<?php
$to = 'mythemc@gmail.com'; 
$from = 'noreply@questcode.tk'; 
$fromName = 'QuestCode!'; 
 
$subject = "Bienvenido a QuestCode!"; 
 
include("../mails/mailcontent.php");
 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
 
// Send email 
if(mail($_SESSION['email'], $subject, $messagebody, $headers)){ 
	echo 'Email enviado.'; 
}else{ 
	return true;
}
?>
