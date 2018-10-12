<?php 
include '../utils.php';

$EMAIL = $_POST['txtemail'];
$MSG = $_POST['txtmessage'];

DBOpen();

$rs = DBExecute(" INSERT INTO message SET EMAIL = '$EMAIL', message = '$MSG' ");

DBClose();

	// EMAIL
require_once '../vendor/autoload.php';
	// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'SSL'))
->setUsername('springplazahotel247@gmail.com')
->setPassword("spring123");

	// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

	// Create a message
$message = (new Swift_Message('Concerns And Suggestions'))
->setFrom(['springplazahotel247@gmail.com' => 'Spring Plaza Hotel'])
->setTo(['springplazahotel247@gmail.com' => 'A name'])
->setBody('Hi ! Spring Plaza Hotel
	<br>
	<br>
	<br>
	'.$MSG.'
	<br>
	<br>
	<br>
	Please reply me on this email: '.$EMAIL.'
	<br>
	Regards,',"text/html");
	// Send the message
$result = $mailer->send($message);

redir("../index.php");
?>