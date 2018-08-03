<?php 
include '../utils.php';

DBOpen();

$getLastTrans = DBGetData(" SELECT MAX(reservationid) FROM reservations_temp ");
	//dump($getLastTrans[0][0]);

$TempData = DBGetData(" SELECT * FROM reservations_temp WHERE reservationid = " .SQLs($getLastTrans[0][0]));
//dump($TempData);

$SaveData = DBExecute(" INSERT INTO reservations SET firstname = '".$TempData[0][1]."',
	lastname = '".$TempData[0][2]."',
	contactno = '".$TempData[0][3]."',
	address = '".$TempData[0][4]."',
	adult = '".$TempData[0][5]."',
	child = '".$TempData[0][6]."',
	days = '".$TempData[0][7]."',
	reservationdate = '".$TempData[0][8]."',
	checkindate = '".$TempData[0][9]."',
	checkoutdate = '".$TempData[0][10]."',
	checkintime = '".$TempData[0][11]."',
	checkouttime = '".$TempData[0][12]."',
	roomtype = '".$TempData[0][13]."',
	roomno = '".$TempData[0][14]."',
	modeofpayment = '".$TempData[0][15]."',
	downpayment = '".$TempData[0][16]."',
	totalamount = '".$TempData[0][17]."',
	balance = '".$TempData[0][18]."',
	Status = '".$TempData[0][19]."',
	Email = '".$TempData[0][20]."',
	TotalPaid = '".$TempData[0][21]."',
	ReservationID = '".$TempData[0][22]."' ");

// $update = DBExecute(" UPDATE roominformation set roomavailability = 'Not Available' where roomno = '".$TempData[0][14]."' ");
DBClose();

DBOpen();

$bankinfo = DBGetData("SELECT * from bankinfo");

require_once '../vendor/autoload.php';

	// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
->setUsername('springplazahotel247@gmail.com')
->setPassword('spring123');

	// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

	// Create a message
$message = (new Swift_Message('Reservation from HOTEL SPRING PLAZA'))
->setFrom(['crm.philpacs@gmail.com' => 'HotelSpringPlaza'])
->setTo([$TempData[0][20] => 'A name'])
->setBody('Hi '.$TempData[0][1].' '.$TempData[0][2].'!
	<br>
	<br>
	<br>
	Your Reservation is paid via Paypal.
	<br>
	please kindly present this to the front desk of Hotel Spring Plaza for verification
	<br>
	<br>
	RESERVATION DETAILS
	<br>
	<br>
	RESERVATION ID: '.$TempData[0][22].'
	<br>
	CHECK IN: '.$TempData[0][9].'
	<br>
	CHECK OUT: '.$TempData[0][10].'
	<br>
	ROOM NO: '.$TempData[0][14].'
	<br>
	ROOM TYPE: '.$TempData[0][13].'
	<br>
	ADULT: '.$TempData[0][5].'
	<br>
	CHILD: '.$TempData[0][6].'
	<br>
	DAYS: '.$TempData[0][7].'
	<br>
	PAID: '.number_format($TempData[0][21]).'
	<br>
	BALANCE: '.number_format($TempData[0][18]).'
	<br>
	TOTAL FEE: '.number_format($TempData[0][17]).'
	<br>
	<br>
	<br>
	Regards,',"text/html");
	// Send the message
$result = $mailer->send($message);

DbClose();

redirMsg("../index.php","Reservation Successfully!");
?>