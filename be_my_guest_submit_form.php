<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Create Text File</title>
<style>
body {
	font-family: Tahoma, Geniva, sans-serif;
	font-size: 11px;
	color: #000;
}
.bold {
	font-weight: bold;
}
td { text-align:left; }
h1 {
	color: #512c1d;
	font-size: 24px;
	font-weight: bold;
	text-align: center;
}
h3 {
	color: #512c1d;
	font-size: 14px;
	font-weight: bold;
}
label, input, select, textarea {
	margin: 8px;
}
#orangeBox {
	display: inline-block;
	border: 1px solid #EAD7AD;
	padding: 25px;
	border-radius: 5px;
	box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.1);
	background: #FFF2D4;
	background-image: -webkit-linear-gradient(top, #FFF2D4, #FFDF9B); /* For Chrome 25 and Safari 6, iOS 6.1, Android 4.3 */
  background-image:    -moz-linear-gradient(center top, #FFF2D4, #FFDF9B) repeat scroll 0% 0% transparent; /* For Firefox (3.6 to 15) */
  background-image:      -o-linear-gradient(top, #FFF2D4, #FFDF9B); /* For old Opera (11.1 to 12.0) */ 
  background-image:         linear-gradient(to bottom, #FFF2D4, #FFDF9B); /* Standard syntax; must be last */
	width: auto; 
	text-align: left;
}
#container {
	text-align: center;
	margin: 0px auto;
}
.grad { 
  background-color: #F07575; /* fallback color if gradients are not supported */
}
.nobr	{ white-space:nowrap; }
.asterisk {
	color: #f00;
}
.noPad {
	padding:0px;
	margin:0px;
	padding-right:3px;
}
</style>
</head>
<body>
<div id="container">
  <div id="orangeBox">
    <div style="background:#fff; text-align:center;"><img src="art/lsm_logo_static.png" width="200" /></div>
      <h1>Thank you for submitting your request!</h1>
      <div style="margin:20px; color:#000;">
      	
      
<?php
$items = '';
$htmlItems = '';


	foreach($_POST as $name => $value){ 
		$items .= $name.': '.test_input($value)."\n \n"; 
		$htmlItems .= $name.': '.test_input($value)."<br /><br />"; 
	}


$filename = str_replace(':', '', test_input($_POST['Request_Title'].' '.date("Y m d, G:i")));
$filename = str_replace('/', '', $filename);
$filename = str_replace(',', '', $filename);
$filename = str_replace(' ', '_', $filename);
$filename .= '.txt';

$myfile = fopen('sheets/'.$filename, "w") or die("Unable to open file!");

$txt = $items;
fwrite($myfile, $txt);

fclose($myfile);


/** DISPLAY DATA ON PAGE FIRST **/
echo '<p>'. $htmlItems . '</p>';


/****** SEND EMAIL PORTION ******/
 
$email_from = "donotreplyLSM@zadv.com"; //this is fake -- 
 
$email_to = "lsmnow@zadv.com"; //"kenklein@zadv.com";

$email_subject = $filename;
	
$email_message = $items;

if(isset($email_to)) {

    function died($error) {
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }

//some validation could go here but most occurs in referring page
//right now these cc: email options are unused but I'll leave in
//in case of future need for this

$email1 = test_input($_POST['email1']);
$email2 = test_input($_POST['email2']);
$email3 = test_input($_POST['email3']);
$email4 = test_input($_POST['email4']);
$email5 = test_input($_POST['email5']); 

if ($email1) {
	$email1 = ", ".$email1;
}
if ($email2) {
	$email2 = ", ".$email2;
}
if ($email3) {
	$email3 = ", ".$email3;
}
if ($email4) {
	$email4 = ", ".$email4;
}
if ($email5) {
	$email5 = ", ".$email5;
}
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();

$email_to .= $email1 . $email2 . $email3 . $email4 . $email5;


@mail($email_to, $email_subject, $email_message, $headers);  
 
}

/****** FUNCTIONS *******/
/* Form Security -- strip tags etc. */
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
	</div>
  </div>
</div>
</body>
</html>

