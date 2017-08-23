<?php

$email="";
 if (isset($_POST['Submit'])) {
 	$email=$_POST['email'];
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'rnradon17@gmail.com';                 // SMTP username
$mail->Password = 'dtwybkqwdynwfswu';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('rnradon17@gmail.com', 'Rishabh Narang | Full Stack Developer | Data Analyst');
$mail->addAddress($email);     // Add a recipient
$mail->addAddress($email);               // Name is optional
$mail->addReplyTo('rnradon17@gmail.com', 'rnradon');


$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Happy to Help !';

$mail->Body    = 'Hey! <br> 
				You seem to need a helping hand. <br> 
				No worries, mail me your requirements and I will be there with a working solution. :) <br><br><br>
				<b>Rishabh Narang<br>
				Full Stack Dev | Data Analyst<br>
				+919999688904<br>
				rnradon17@gmail.com</b>';
$mail->AltBody = 'happy learning';
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
header("Location: index.html");
}
 }

?>