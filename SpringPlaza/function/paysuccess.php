<?php 
include '../utils.php';

DBOpen();

$getLastTrans = DBGetData(" SELECT MAX(reservationid) FROM reservations_temp ");
	//dump($getLastTrans[0][0]);

$TempData = DBGetData(" SELECT * FROM reservations_temp WHERE reservationid = " .SQLs($getLastTrans[0][0]));

$x = $TempData[0][9]; 
do 
{
	
	$resdate = DBExecute(" INSERT INTO reservedate SET ReservationID = '".$TempData[0][22]."',
		reservationdate = '$maniladate',
		checkin = '$x',
		checkout = '".$TempData[0][10]."',
		roomno = '".$TempData[0][14]."',
		roomtype = '".$TempData[0][13]."' ");
	
	$x++;
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
'<table name="demo" id="demo" class="table table-striped table-bordered" cellspacing="0" width="100%">'.
'<thead>'.
'<tr style="">'.
'<th>RESERVATION ID</th>'.
'<th>CHECK IN</th>'.
'<th>CHECK OUT</th>'. 
'<th>ROOM NO</th>'.
'<th>ROOM TYPE</th>'. 
'<th>ADULT</th>'.
'<th>CHILD</th>'. 
'<th>DAYS</th>'.
'<th>PAID</th>'.
'<th>BALANCE</th>'.
'<th>TOTAL FEE</th>'.    
'</tr>'.
'</thead>'.
'<tbody>'.
'<!--INSERT DATA HERE-->'.
'<tr>'.
'<td>'.$TempData[0][22].'</td>'.
'<td>'.$TempData[0][9].'</td>'.
'<td>'.$TempData[0][10].'</td>'.
'<td>'.$TempData[0][14].'</td>'.
'<td>'.$TempData[0][13].'</td>'.
'<td>'.$TempData[0][5].'</td>'.
'<td>'.$TempData[0][6].'</td>'.
'<td>'.$TempData[0][7].'</td>'.
'<td>'.number_format($TempData[0][21]).'</td>'.
'<td>'.number_format($TempData[0][18]).'</td>'.
'<td>'.number_format($TempData[0][17]).'</td>'. 
'</tr>'.
'</tbody>'.
'</table>'.
'<br>'.
'<br>'.
'<center>REMINDER: There is an additional payment of 650.00 for each exceeding guest.</center>'.
'</body>'.
'</html>';
//instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);


// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');


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