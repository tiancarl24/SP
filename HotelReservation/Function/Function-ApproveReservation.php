<?php 
include "../utils.php"; 
include "../incSecure.php";

DBOpen();

$ResID = $_POST['lblApproved'];
$DP = $_POST['txtDP'];
$AMOUNT = $_POST['lblAmount'];
$BAL = $AMOUNT - $DP;
//dump($BAL);

$rs = DBExecute(" UPDATE reservations SET Status = 'Approved', downpayment = '$DP', balance = '$BAL' WHERE rowid = " .SQLs($ResID));

DbClose();

DBOpen();

$data = DBGetData(" SELECT * FROM reservations WHERE rowid = " .SQLs($ResID));
//dump($data[0][20]);
$bankinfo = DBGetData(" SELECT * FROM bankinfo ");
//dump($data[0][20]);
require_once '../../SpringPlaza/vendor/autoload.php';

	// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
->setUsername('springplazahotel247@gmail.com')
->setPassword('spring123');

	// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

	// Create a message
$message = (new Swift_Message('Reservation from HOTEL SPRING PLAZA'))
->setFrom(['springplazahotel247@gmail.com' => 'Hotel Spring Plaza'])
->setTo([$data[0][20] => 'A name'])
->setBody('Hi '.$data[0][1].' '.$data[0][2].'!
	<br>
	<br>
	<br>
	Your Reservation is Approved!
	<br>
	<br>
	RESERVATION DETAILS
	<br>
	<br>
	CHECK IN: '.$data[0][9].'
	<br>
	CHECK OUT: '.$data[0][10].'
	<br>
	ROOM NO: '.$data[0][14].'
	<br>
	ROOM TYPE: '.$data[0][13].'
	<br>
	ADULT: '.$data[0][5].'
	<br>
	CHILD: '.$data[0][6].'
	<br>
	DAYS: '.$data[0][7].'
	<br>
	TOTAL FEES: '.$data[0][17].'
	<br>
	<br>
	BANK DETAILS
	<br>
	<br>
	BANK: '.$bankinfo[0][1].'
	<br>
	ACCOUNT NAME: '.$bankinfo[0][2].'
	<br>
	ACCOUNT NUMBER: '.$bankinfo[0][3].'
	<br>
	<br>
	<br>
	Regards,',"text/html");
	// Send the message
$result = $mailer->send($message);

DBClose();

redirMsg('../Reservations.php','Reservation Successfully Approved!');
?>