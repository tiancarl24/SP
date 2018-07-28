<?php
error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 1);
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$now = new DateTime('NOW', new DateTimeZone('Asia/Singapore'));
$maniladate = $now->format("Y-m-d");
$manilatime = $now->format("H:i:s");
$manilanow = "$maniladate $manilatime";
$conn = null;
define("c", ",");

// function wrBtn($type, $name, $value, $class){
//   wr("<button type='$type' name="$name" id="$name" class='btn $class' value='$value'></button>");
// }

function wrBtn($type, $name, $value, $class, $color){
  if ($color == "gray")
    wr("<input type='$type' id='$name' name='$name' value='$value' class='btn btn-default $class' color='$color'>");
  else if ($color == "blue")
    wr("<input type='$type' id='$name' name='$name' value='$value' class='btn btn-primary $class' color='$color'>");
  else if ($color == "bluegreen")
    wr("<input type='$type' id='$name' name='$name' value='$value' class='btn btn-info $class' color='$color'>");
  else if ($color == "greensuccess")
    wr("<input type='$type' id='$name' name='$name' value='$value' class='btn btn-success $class' color='$color'>");
  else if ($color == "greenmint")
    wr("<input type='$type' id='$name' name='$name' value='$value' class='btn btn-mint $class' color='$color'>");
  else if ($color == "orange")
    wr("<input type='$type' id='$name' name='$name' value='$value' class='btn btn-warning $class' color='$color'>");
  else if ($color == "red")
    wr("<input type='$type' id='$name' name='$name' value='$value' class='btn btn-danger $class' color='$color'>");
  else if ($color == "pink")
    wr("<input type='$type' id='$name' name='$name' value='$value' class='btn btn-pink $class' color='$color'>");
  else if ($color == "purple")
    wr("<input type='$type' id='$name' name='$name' value='$value' class='btn btn-purple $class' color='$color'>");
  else if ($color == "dark")
    wr("<input type='$type' id='$name' name='$name' value='$value' class='btn btn-dark $class' color='$color'>");
}
function wrMembershipID($type, $name, $value, $colsize,$pangecho) {
 if ($type == "") $type = "text";
 wr("<div class='$colsize'>
  <label class='control-label'>$value</label>
  <input type='$type' id='$name' name='$name' value='$pangecho' class='form-control' readonly>
  </div>");
}
function wrInput($type, $name, $value, $colsize) {
 if ($type == "") $type = "text";
 wr("<div class='$colsize'>
  <label class='control-label'>$value</label>
  <input type='$type' id='$name' name='$name' class='form-control'>
  </div>");
}
function wrInput2($type, $name, $value, $colsize,$echo) {
 if ($type == "") $type = "text";
 wr("<div class='$colsize'>
  <label class='control-label'>$value</label>
  <input type='$type' id='$name' name='$name' class='form-control' value='$echo'>
  </div>");
}
  function wrInputPlaceholder($type, $name, $placeholder, $colsize) {
    if ($type == "") $type = "text";
    wr("<div class='$colsize'>
    <input type='$type' id='$name' name='$name' class='form-control $colsize' placeholder='$placeholder'>
    </div>");
  }
  function wrInputPlaceholderUpdate($type, $name, $placeholder, $colsize) {
    if ($type == "") $type = "text";
    wr("<div class='$colsize'>
    <input type='$type' id='$name' name='$name' class='form-control $colsize' placeholder='$placeholder'>
    </div>");
  }

  function wrRadio($type, $groupby, $name, $value, $colsize){
    if ($type == "") $type = "radio";
    wr("<div class='$colsize'>
    <div class='radio'>
    <input type='$type' id='$name' name='$groupby' class='magic-radio' value='$value'>
    <label for='$name'>$value</label>
    </div>
    </div>");
  }
  function wrRadioUpdate($type, $groupby, $name, $value, $colsize, $selected){
    if ($type == "") $type = "radio";
    wr("<div class='$colsize'>
    <div class='radio'>
    <input type='$type' id='$name' name='$groupby' class='magic-radio' value='$value' $selected>
    <label for='$name'>$value</label>
    </div>
    </div>");
  }
  function wrTextArea($name, $value, $colsize) {
 wr("<div class='$colsize'>
  <label class='control-label'>$value</label>
  <textarea id='$name' name='$name' rows='8' class='form-control'></textarea>
  </div>");
}
// <div class="col-lg-3">
// <div class="radio">
// <input id="demo-form-radio" class="magic-radio" type="radio" name="form-radio-button" checked>
// <label for="demo-form-radio">Owned</label>
// </div>
// </div>
  function left($str, $length) {
   return substr($str, 0, $length);
 }

 function right($str, $length) {
   return substr($str, -$length);
 }

 function cleanMobile($m) {
   $m = trim($m);
   $m = str_replace("-","",$m);
   $m = str_replace("(","",$m);
     $m = str_replace(")","",$m);
   $m = str_replace(".","",$m);
   $m = str_replace(" ","",$m);
   $m = str_replace("+","",$m);
   if (left($m,3) == "639") $m = "09" . right($m,9);
   if (left($m,1) == "9" && strlen($m) == 10) $m = "0" . $m;
   return $m;
 }

 include "conn.php";

 function DBOpen() {
  global $serverName;
  global $username; 
  global $password;
  global $conn;

  try {
    $conn = new PDO($serverName, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
}


function dump($d) {
 echo "<pre>";
 var_dump($d);
 echo "</pre>";
 die();
}

function DBExecute($query) {
 global $conn;
 $conn->query($query);
 return $conn->lastInsertId(); // no Oracle support
}

function DBGetData($query) {
 global $conn;
 $stmt = $conn->query($query);
 $stmt->setFetchMode(PDO::FETCH_NUM); // NUM ASSOC BOTH
 return $stmt->fetchAll();
}

function DBGetData2($query) {
 global $conn;
 $stmt = $conn->query($query);
 $stmt->setFetchMode(PDO::FETCH_ASSOC); // NUM ASSOC BOTH
 return $stmt->fetchAll();
}

function DBClose() {
 global $conn;
 $conn = null;
}

function SQLs($val) {
 if ($val == null)
  return "NULL";
else
  return "'" . str_replace("'", "''", $val) . "'";
}

$encryption_key = base64_decode("eHchxwVMq6OsNkNCZhgkVrueDZlMlOq/PipelybDli4=");
// $encryption_key_256bit = base64_encode(openssl_random_pseudo_bytes(32));
function encode($data) {
 global $encryption_key;
 return openssl_encrypt($data, 'aes-256-cbc', $encryption_key); //, 0, $iv);
}

function decode($data) {
 global $encryption_key;
 return openssl_decrypt($data, 'aes-256-cbc', $encryption_key); // , 0, $iv);
}

function wr($string) {
 echo $string;
 ob_flush();
 flush();  
}

function match($a, $b, $c) {
 if ($a == $b) return $c;
}

function matchin($haystack, $needle, $c) {
 if (stripos($haystack,$needle) === false)
  return "";
else
  return $c;
}

function redir($url) {
 header("Location: $url");
 exit();
}

function redirMsg($url, $msg) {
 $frm = '<form id="myForm" action="'.$url.'" method="post">
 <input type="hidden" name="msg" value="'.htmlentities($msg).'">
 </form><script>document.getElementById("myForm").submit();</script>';
 die($frm);
}
?>