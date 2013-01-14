<?php
require_once('functions.php');

  ///////////////////
 //////CONTACT//////
///////////////////

if($_POST['did_send']=='true'){
	$name=clean_input($_POST['name']);
	$phone=clean_input($_POST['phone']);
	$email=clean_input($_POST['email']);
	$message=clean_input($_POST['message']);
	
	$to='info@andyosuna.com';
	$subject='Contact';
	
	$body="Someone contacted you from your website! \n";
	$body.="Their name is: $name \n";
	$body.="Email Address: $email \n";
	$body.="Phone Number: $phone \n\n";
	$body.="Message: $message \n";
	$headers="Reply-to: $email \r\n";
	$headers.="From: $email \r\n";
	$headers.="CC: belsogno@andyosuna.com";
		
	$valid=true;
	
	if(strlen($name)==0 OR strlen($message)==0){
		$valid=false;
		$blank_error="<div class='red help-label'>Please don't leave this blank.</div>";
	}
	if(strlen($email)==0){
		$valid=false;
		$blank_error="<div class='red help-label'>Please don't leave this blank.</div>";		
	}elseif(check_email_address($email)==false){
		$valid=false;
		$email_error="<div class='yellow help-label'>Please provide a valid email</div>";
	}

	if($valid==true){
		$mail_sent=mail($to,$subject,$body,$headers);
		if($mail_sent==1){
			$success="<div class='green help-label'>Thank you for contacting us, ".$name."! We will get back to you shortly.</div>";
		}else{
			$db_error="<div class='red help-label'><strong>Sorry, something went wrong.</strong> Your message was not sent. Please take a moment to inform the <a href='mailto:support@andyosuna.com'>Webmaster</a> of this error!</div>";
		}
	}
}