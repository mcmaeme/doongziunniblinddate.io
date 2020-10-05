<?php
// Check for empty fields
if(empty($_POST['이름'])  		||
   empty($_POST['나이']) 		||
   empty($_POST['이메일 주소']) 		||
   empty($_POST['거주지역'])
   empty($_POST['본인소개'])
   empty($_POST['이상형'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = strip_tags(htmlspecialchars($_POST['name']));
$age = strip_tags(htmlspecialchars($_POST['age']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$place = strip_tags(htmlspecialchars($_POST['place']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$message = strip_tags(htmlspecialchars($_POST['message']));
	
// Create the email and send the message
$to = 'janey326@naver.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "둥지언니 랜선소개팅 지원:  $name $age";
$email_body = "둥지언니 랜선소개팅 지원\n\n"."Here are the details:\n\n이름: $name\n\n나이: $age\n\n 이메일: $email_address\n\n사는 곳: $phone\n\n본인소개:\n$message\n\n이상형:$message\n\n";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>