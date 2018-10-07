<?php 
include '../utils.php';
include '../incSecure.php';

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
$DATES = $_POST['date'];

$timestampIN = strtotime($CIN);
$NEWCIN = date('Y-m-d', $timestampIN);

$timestampOUT = strtotime($COUT);
$NEWCOUT = date('Y-m-d', $timestampOUT);

$x = $NEWCIN; 

$lastdate = $x;
$lastdate = date("Y-m-t", strtotime($lastdate));
$nextmonth = date("Y-m-d", strtotime(date('m', strtotime('+1 month')).'/01/'.date('Y').' 00:00:00'));
//dump($nextmonth);

do 
{
	DBOpen();
	$resdate = DBExecute(" INSERT INTO reservedate SET ReservationID = '$AppID',
		reservationdate = '$maniladate',
		checkin = '$x',
		checkout = '$NEWCOUT',
		roomno = '$ROOMNO',
		roomtype = '$RTYPE' ");

	DBClose();
	//$x++;
	if($x == $lastdate)
	{

		$x = $nextmonth;
		//dump($x);
		//$x++;
	}
	else
	{
		$x++;
	}

}
while ($x <= $NEWCOUT);

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

$user = $_SESSION['HotelReservation.name'];
$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Add Reservation: $AppID', auditdate = '$maniladate', audittime = '$manilatime' ");

$bankinfo = DBGetData("SELECT * from bankinfo");
//dump($EMAIL);

//>>PDF AND EMAIL

require_once '../vendor/autoload.php';
//PDF

// reference the Dompdf namespace
use Dompdf\Dompdf;
$html =
'<html>'.
'<body>'.
'<img src="../../SpringPlaza/img/pdflogo.png" style="margin-right: auto; margin-left: auto; display: block; margin-left: 230px;">'.
'<br>'.
'<br>'.
'<br>'.
'<br>'.
'<div class="container" style="width: 95%; margin-left: auto; margin-right: auto; display: block; font-size: 20px; line-height: 15px;">'.
'<p>Dear Guest,</p>'.
'<p>Thank you for choosing Spring Plaza Hotel. It is our pleasure to confirm your reservation as follows.</p>'.
'<h3>Reservation Details</h3>'.
'<p>Reservation No.:'.$AppID.'</p>'.
'<p>Check-in Date:'.$CIN.'</p>'.
'<p>Check-out Date:'.$COUT.'</p>'.
'<p>Room Type:'.$RTYPE.'</p>'.
'<p>Adult/s:'.$ADULT.'</p>'.
'<p>Child/s:'.$CHILD.'</p>'.
'<p>Day/s:'.$DAYS.'</p>'.
'<p>Paid:'.number_format($TempData[0][16]).'</p>'.
'<p>Balance:'.number_format($TempData[0][18]).'</p>'.
'<p>Total Fee:'.number_format($TOTAL).'</p>'.
'<h3>Guest Details:</h3>'.
'<p>Full Name.:'.$FNAME . $LNAME.'</p>'.
'<p>Contact No.:'.$PHONE.'</p>'.
'<p>Email Address:'.$EMAIL.'</p>'.
'<hr>'.
'<h3>Cancellation Policy</h3>'.
'<p>A 50% refund will be made for cancellations received 30days before date of check-in, No refund thereafter</p>'.
'<br>'.
'<h4 style="text-align: right;">Thanks and Regards,</h4>'.
'<p style="text-align: right;"><b>Mr. Sherwin Go</b></p>'.
'<p style="text-align: right; font-size: 15px;">General Manager/Reservation Executive</p>'.
'</div>'.
'</body>'.
'</html>';
//instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);


// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');


// Render the HTML as PDF
$dompdf->render();

// // Output the generated PDF to Browser
// $dompdf->stream($refno);

file_put_contents("../pdf/".$AppID.".pdf",$dompdf->output($AppID));  

// EMAIL
	// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'SSL'))
->setUsername('springplazahotel247@gmail.com')
->setPassword("spring123");

	// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

	// Create a message
$message = (new Swift_Message('Reservation from SPRING PLAZA HOTEL'))
->setFrom(['springplazahotel247@gmail.com' => 'Spring Plaza Hotel'])
->setTo([$EMAIL => 'A name'])
->setBody('Hi '.$FNAME.' '.$LNAME.'!
	<br>
	<br>
	<br>
	Your Reservation is now submitted to our hotel representative
	<br>
	please settle atleast half of the total price of your bill to ensure your reservation.
	<br>
	<br>
	Bank: '.$bankinfo[0][1].'
	<br>
	Account Name: '.$bankinfo[0][2].'
	<br>
	Account Number: '.$bankinfo[0][3].'
	<br>
	<br>
	Regards,',"text/html");
	// Send the message
$result = $mailer->send($message);

DBClose();

redirMsg("../thankyou.php","Reservation Successfully!");
?>