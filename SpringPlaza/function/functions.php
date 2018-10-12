<?php 
include '../utils.php';
//dump($itemAmount);

if($option == "Half")
{
     DBOpen();

    $timestampIN = strtotime($CIN);
    $NEWCIN = date('Y-m-d', $timestampIN);

    $timestampOUT = strtotime($COUT);
    $NEWCOUT = date('Y-m-d', $timestampOUT);
    //dump($DATA['lblname']);

    $rs = DBExecute(" INSERT INTO reservations_temp SET firstname = '".$DATA['lblname']."',
        lastname = '".$DATA['lname']."',
        contactno = '".$DATA['phone']."',
        address = '".$DATA['address']."',
        adult = '".$DATA['adult']."',
        child = '".$DATA['children']."',
        days = '".$DATA['days']."',
        reservationdate = '".$maniladate."',
        checkindate = '".$NEWCIN."',
        checkoutdate = '".$NEWCOUT."',
        checkintime = '14:00:00',
        checkouttime = '12:00:00',
        roomtype = '".$DATA['roomtype']."',
        roomno = '".$DATA['roomno']."',
        modeofpayment = 'Paypal',
        downpayment = '".$itemAmount."',
        totalamount = '".$DATA['totalprice']."',
        balance = '".$itemAmount."',
        Status = 'Approved',
        Email = '".$DATA['email']."',
        TotalPaid = '".$itemAmount."',
        ReservationID = '".$ResID."' ");

    DBClose();
}
else
{
    DBOpen();

    $timestampIN = strtotime($CIN);
    $NEWCIN = date('Y-m-d', $timestampIN);

    $timestampOUT = strtotime($COUT);
    $NEWCOUT = date('Y-m-d', $timestampOUT);

    $rs = DBExecute(" INSERT INTO reservations_temp SET firstname = '".$DATA['lblname']."',
        lastname = '".$DATA['lname']."',
        contactno = '".$DATA['phone']."',
        address = '".$DATA['address']."',
        adult = '".$DATA['adult']."',
        child = '".$DATA['children']."',
        days = '".$DATA['days']."',
        reservationdate = '".$maniladate."',
        checkindate = '".$NEWCIN."',
        checkoutdate = '".$NEWCOUT."',
        checkintime = '14:00:00',
        checkouttime = '12:00:00',
        roomtype = '".$DATA['roomtype']."',
        roomno = '".$DATA['roomno']."',
        modeofpayment = 'Paypal',
        downpayment = '".$itemAmount."',
        totalamount = '".$DATA['totalprice']."',
        balance = '0',
        Status = 'Approved',
        Email = '".$DATA['email']."',
        TotalPaid = '".$itemAmount."',
        ReservationID = '".$ResID."' ");

    DBClose();
}

function verifyTransaction($data) 
{
    global $paypalUrl;

    $req = 'cmd=_notify-validate';
    foreach ($data as $key => $value) 
    {
        $value = urlencode(stripslashes($value));
        $value = preg_replace('/(.*[^%^0^D])(%0A)(.*)/i', '${1}%0D%0A${3}', $value); // IPN fix
        $req .= "&$key=$value";
    }

    $ch = curl_init($paypalUrl);
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
    curl_setopt($ch, CURLOPT_SSLVERSION, 6);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
    $res = curl_exec($ch);

    if (!$res) 
    {
        $errno = curl_errno($ch);
        $errstr = curl_error($ch);
        curl_close($ch);
        throw new Exception("cURL error: [$errno] $errstr");
    }

    $info = curl_getinfo($ch);

    // Check the http response
    $httpCode = $info['http_code'];
    if ($httpCode != 200) {
        throw new Exception("PayPal responded with http code $httpCode");
    }

    curl_close($ch);

    return $res === 'VERIFIED';
}

function addPayment($data) 
{
    global $db;

    if (is_array($data)) 
    {
        $stmt = $db->prepare('INSERT INTO `payments` (txnid, payment_amount, payment_status, itemid, createdtime) VALUES(?, ?, ?, ?, ?)');
        $stmt->bind_param(
            'sdsss',
            $data['txn_id'],
            $data['payment_amount'],
            $data['payment_status'],
            $data['item_number'],
            date('Y-m-d H:i:s')
        );
        $stmt->execute();
        $stmt->close();

        return $db->insert_id;
    }

    return false;
}
?>