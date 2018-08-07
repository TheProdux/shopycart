<?php 
$errors = '';
$myemail = 'produxdesk@gmail.com';//<-----Put Your email address here.
if( empty($_POST['radio1'])  || 
	empty($_POST['radio2'])  || 
	empty($_POST['check1'])  ||
	empty($_POST['email'])   ||
	empty ($_POST['username']) )
{
    $errors .= "\n Error: all fields are required";
}

$q2 = $_POST['radio1'];
$q1 = $_POST['radio2']; 
$email_address = $_POST['email'];
$range = $_GET['i'];
$check1 = $_POST['check1'];
$u_name = $_POST['username'];

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	echo "Radio value is:".$q1;
	$to = $myemail; 
	$email_subject = "Contact form submission: $email_address";
	$email_body = "You have received a new message. ".
	" Here are the details: \nName: $u_name \nEmail: $email_address \n Q1: $q1  \n Q2: $q2  \nRange: $range \nCheck: $check1"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: index.html');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>
<?php 
 if(@$_POST['submit']){
$errors = '';
$myemail = 'produxdesk@gmail.com';//<-----Put Your email address here.
if(empty($_POST['name1'])  || 
   empty($_POST['email1']) || 
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name1'];
$email_address = $_POST['email1']; 


if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Broucher Downloaded: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name  \n Email: $email_address \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: index.html');
} 
 }
?>