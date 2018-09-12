<?php 
include '../utils.php';

DBOpen();

$getLastTrans = DBGetData(" SELECT MAX(reservationid) FROM reservations_temp ");
//dump($getLastTrans[0][0]);


$TempData = DBGetData(" SELECT * FROM reservations_temp WHERE reservationid = " .SQLs($getLastTrans[0][0]));

$x = $TempData[0][9]; 
$lastdate = $x;
$lastdate = date("Y-m-t", strtotime($lastdate));
$nextmonth = date("Y-m-d", strtotime(date('m', strtotime('+1 month')).'/01/'.date('Y').' 00:00:00'));

do 
{
	
	$resdate = DBExecute(" INSERT INTO reservedate SET ReservationID = '".$TempData[0][22]."',
		reservationdate = '$maniladate',
		checkin = '$x',
		checkout = '".$TempData[0][10]."',
		roomno = '".$TempData[0][14]."',
		roomtype = '".$TempData[0][13]."' ");
	
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
while ($x <= $TempData[0][10]);


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
'<p>Reservation No.:'.$TempData[0][22].'</p>'.
'<p>Check-in Date:'.$TempData[0][9].'</p>'.
'<p>Check-out Date:'.$TempData[0][10].'</p>'.
'<p>Room Type:'.$TempData[0][13].'</p>'.
'<p>Adult/s:'.$TempData[0][5].'</p>'.
'<p>Child/s:'.$TempData[0][6].'</p>'.
'<p>Day/s:'.$TempData[0][7].'</p>'.
'<p>Paid:'.number_format($TempData[0][16]).'</p>'.
'<p>Balance:'.number_format($TempData[0][18]).'</p>'.
'<p>Total Fee:'.number_format($TempData[0][17]).'</p>'.
'<h3>Guest Details:</h3>'.
'<p>Full Name.:'.$TempData[0][1] . $TempData[0][2].'</p>'.
'<p>Contact No.:'.$TempData[0][3].'</p>'.
'<p>Email Address:'.$TempData[0][20].'</p>'.
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

// ----

//instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);


// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');


// Render the HTML as PDF
$dompdf->render();

// // Output the generated PDF to Browser
// $dompdf->stream($refno);

file_put_contents("../pdf/".$TempData[0][22].".pdf",$dompdf->output($TempData[0][22]));  

// EMAIL

	// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
->setUsername('springplazahotel247@gmail.com')
->setPassword('spring123');

	// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

	// Create a message
$message = (new Swift_Message('Reservation from HOTEL SPRING PLAZA'))
->setFrom(['springplazahotel247@gmail.com' => 'HotelSpringPlaza'])
->setTo([$TempData[0][20] => 'A name'])
->attach(Swift_Attachment::fromPath('../pdf/'.$TempData[0][22].'.pdf'))
->setBody('Hi '.$TempData[0][1].' '.$TempData[0][2].'!
	<br>
	<br>
	<br>
	Your Reservation is paid via Paypal.
	<br>
	please kindly present this to the front desk of Hotel Spring Plaza for verification
	<br>
	<br>
	<br>
	Regards,',"text/html");
	// Send the message
$result = $mailer->send($message);

DbClose();

redirMsg("../index.php","Reservation Successfully!");
?>