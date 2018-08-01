<?php 
include '../utils.php';

$AppID = $_POST['resID1'];
$FNAME = $_POST['fname'];
$LNAME = $_POST['lname'];
$NAME = $_POST['name'];
$ADDRESS = $_POST['address'];
$CITY = $_POST['city'];
$ZIPCODE = $_POST['zipcode'];
$PHONE = $_POST['phone'];
$EMAIL = $_POST['email'];
$CIN = $_POST['cin1'];
$COUT = $_POST['cout'];
$ROOMNO = $_POST['roomno1'];
$RTYPE = $_POST['roomtype1'];
$ADULT = $_POST['adult'];
$CHILD = $_POST['children'];
$PRICE = $_POST['price'];
$DAYS = $_POST['days'];
$TOTAL = $_POST['totalprice'];

$timestampIN = strtotime($CIN);
$NEWCIN = date('Y-m-d', $timestampIN);

$timestampOUT = strtotime($COUT);
$NEWCOUT = date('Y-m-d', $timestampOUT);

// /dump($NEWCOUT);

DBOpen();

$rs = DBExecute(" INSERT INTO reservations SET firstname = '$FNAME',
	lastname = '$LNAME',
	contactno = '$PHONE',
	address = '$ADDRESS',
	adult = '$ADULT',
	child = '$CHILD',
	days = '$DAYS',
	reservationdate = '$maniladate',
	checkindate = '$NEWCIN',
	checkoutdate = '$NEWCOUT',
	checkintime = '$manilatime',
	checkouttime = '$manilatime',
	roomtype = '$RTYPE',
	roomno = '$ROOMNO',
	modeofpayment = 'Pay in Bank',
	downpayment = '0',
	totalamount = '$TOTAL',
	balance = '$TOTAL',
	Status = 'Pending', 
	Email = '$EMAIL',
	TotalPaid = '0',
	ReservationID = '$AppID' ");


$rs = DBExecute(" INSERT INTO reservations_temp SET firstname = '$FNAME',
	lastname = '$LNAME',
	contactno = '$PHONE',
	address = '$ADDRESS',
	adult = '$ADULT',
	child = '$CHILD',
	days = '$DAYS',
	reservationdate = '$maniladate',
	checkindate = '$NEWCIN',
	checkoutdate = '$NEWCOUT',
	checkintime = '$manilatime',
	checkouttime = '$manilatime',
	roomtype = '$RTYPE',
	roomno = '$ROOMNO',
	modeofpayment = 'Pay in Bank',
	downpayment = '0',
	totalamount = '$TOTAL',
	balance = '$TOTAL',
	Status = 'Pending', 
	Email = '$EMAIL',
	TotalPaid = '0',
	ReservationID = '$AppID' ");
//$update = DBExecute(" UPDATE roominformation set roomavailability = 'Not Available' where roomno = '$ROOMNO' ");

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
->setTo([$EMAIL => 'A name'])
->setBody('Hi '.$FNAME.' '.$LNAME.'!
	<br>
	<br>
	<br>
	Your Reservation is now submitted to our hotel representative
	<br>
	please settle atleast half of the total price of your bill to ensure your reservation.
	<br>
	this is the bank details of Hotel Spring Plaza.
	<br>
	<br>
	RESERVATION DETAILS
	<br>
	<br>
	RESERVATION ID: '.$AppID.'
	<br>
	CHECK IN: '.$NEWCIN.'
	<br>
	CHECK OUT: '.$NEWCOUT.'
	<br>
	ROOM NO: '.$ROOMNO.'
	<br>
	ROOM TYPE: '.$RTYPE.'
	<br>
	ADULT: '.$ADULT.'
	<br>
	CHILD: '.$CHILD.'
	<br>
	DAYS: '.$DAYS.'
	<br>
	TOTAL FEES: '.number_format($TOTAL).'
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

redirMsg("../thankyou.php","Reservation Successfully!");
?>