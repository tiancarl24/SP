<?php 
include "../utils.php"; 
include "../incSecure.php";

DBOpen();

$ResID = $_POST['lblApproved'];
$DP = $_POST['txtDP'];
$AMOUNT = $_POST['lblAmount'];
$BAL = $AMOUNT - $DP;
//dump($BAL);

$rs = DBExecute(" UPDATE reservations SET Status = 'Approved', downpayment = '$DP', balance = '$BAL', totalpaid = '$DP' WHERE Reservationid = " .SQLs($ResID));

DbClose();

DBOpen();

$data = DBGetData(" SELECT * FROM reservations WHERE Reservationid = " .SQLs($ResID));

//dump($data[0][22]);
$bankinfo = DBGetData(" SELECT * FROM bankinfo ");
//dump($data[0][20]);
require_once '../../SpringPlaza/vendor/autoload.php';

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
'<p>Reservation No.:'.$data[0][22].'</p>'.
'<p>Check-in Date:'.$data[0][9].'</p>'.
'<p>Check-out Date:'.$data[0][10].'</p>'.
'<p>Room Type:'.$data[0][13].'</p>'.
'<p>Adult/s:'.$data[0][5].'</p>'.
'<p>Child/s:'.$data[0][6].'</p>'.
'<p>Day/s:'.$data[0][7].'</p>'.
'<p>Paid:'.number_format($data[0][16]).'</p>'.
'<p>Balance:'.number_format($data[0][18]).'</p>'.
'<p>Total Fee:'.number_format($data[0][17]).'</p>'.
'<h3>Guest Details:</h3>'.
'<p>Full Name.:'.$data[0][1] . $data[0][2].'</p>'.
'<p>Contact No.:'.$data[0][3].'</p>'.
'<p>Email Address:'.$data[0][20].'</p>'.
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

file_put_contents("../../SpringPlaza/pdf/".$AppID.".pdf",$dompdf->output($AppID));  

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
->attach(Swift_Attachment::fromPath('../../SpringPlaza/pdf/'.$AppID.'.pdf'))
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
	<br>
	<br>
	Regards,',"text/html");
	// Send the message
$result = $mailer->send($message);

DBClose();

redirMsg('../Reservations.php','Reservation Successfully Approved!');
?>