<?php 
/*$errors = '';
$myemail = 'produxdesk@gmail.com';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
	empty($_POST['phone'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name'];
$phone = $_POST['phone'];  
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Mobile:$phone \n Email: $email_address \n Message \n $message"; 
	
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
	empty($_POST['phone1'])  || 
   empty($_POST['email1']) || 
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name1'];
$phone = $_POST['phone1'];  
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
	" Here are the details:\n Name: $name \n Mobile:$phone \n Email: $email_address \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: index.html');
} 
 }*/



 $name = $_GET['name'];
 $mail = $_GET['email'];
 $radio1 = $_GET['radio1'];
 $check1 = $_GET['selected1'];
 $myemail = 'produxdesk@gmail.com';
 $to = $myemail; 
 $email_subject = "Broucher Downloaded: $name";
 $email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name  \n Email: $email_address \n radio1: $radio1 \n Check: $check1"; 
	

 mail($to,$email_subject,$email_body);
?>
