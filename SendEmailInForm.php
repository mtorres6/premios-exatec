<?php
require("PhpMailer\PHPMailer.php");
require("PhpMailer\SMTP.php");

  $mail = new PHPMailer\PHPMailer\PHPMailer();
  $mail->IsSMTP();

try {
	if(isset($_POST['submit'])){
	
	if (!empty($_POST['input1']) || !empty($_POST['input2'])){
    $msg_to_user = '<h1>Fill out the forms</h1>';
    echo "Si lo valido";
    } else {
		$mail->SMTPDebug = 0;                                       
		$mail->isSMTP();                                           
		$mail->Host       = 'smtp.gmail.com';  
		$mail->SMTPAuth   = true;                                   
		$mail->Username   = 'USUER';    
		$mail->Password   = 'PASS';                              
		$mail->SMTPSecure = 'tls';                               
        $mail->Port       = 587; 
        
        $to = "USUER";
		$matricula = $_POST['input1'];
		$email = $_POST['input2'];
		$subject = "Contacto con alma máter";
		$message = "El usuario" . " " . $email . " " . "con la matricula" . $matricula . " \r\n";
		$headers = "From:" . $email . " \r\n";
		$headers2_to = "From:" . $to . " \r\n";
		$message2 = "Tu contacto se a enviado correctamente!";
		$mail->setFrom($to);
		$mail->addAddress($email);

		$mail->setFrom($email);
		$mail->addAddress($to);

		$mail->isHTML(true);
    	$mail->Subject = $subject;
		   $mail->Body    = $message;
		   $mail->send();
	echo 'Message has been sent';
    }
	
 }
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>