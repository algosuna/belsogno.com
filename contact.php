<?php
require 'db/validate.php';
$contact='id="current"';
$current='contact';

if($_GET['ref']=='catering'){
	$preset_message='I am interested in catering services!';
}
if($_GET['ref']=='rentals'){
	$preset_message='I am interested in rentals!';
}
if($_GET['item']=='stools'){
	$preset_message.='I liked the bar stools.';
}
if($_GET['item']=='folding'){
	$preset_message.='I liked the folding chairs.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Us | Bel Sogno | Your Online Wedding Planner | Catering &amp; Party Rentals for the Greater Los Angeles Area</title>
	<?php include 'includes/css.php';?>
	<script type="text/javascript">
	function fieldCheck(){
		var name=document.getElementById("name").value;
		var email=document.getElementById("email").value;
		var message=document.getElementById("message").innerHTML;
		if(name==""){
			document.getElementById("name").focus();
		}else if(email==""){
			document.getElementById("email").focus();
		}else if(email.indexOf("@")==-1){
			document.getElementById("email").value="";
			document.getElementById("email").focus();
		}
	}
	</script>
</head>

<body onload="fieldCheck();">
	<div class="wrapper">
		<?php include 'includes/header.php'; ?>
		<?php include 'includes/nav.php'; ?>

		<div class="container">
			<?php include 'includes/breadcrumbs.php'; ?>

			<div class="content">

				<h2>Contact Us! <small>Question about our services?</small></h2>
				<p>Fill out this form and we will get back to you shortly.</p>

				<div class="well shadow">
					<?php 
					if($valid==true){
						if($mail_sent==1){
							echo $success;
						}else{
							echo $db_error;
						}
					}else{ ?>

					<form action="contact.php" method="post" class="contact" name="contact">
						<legend>Fields marked with <sup class="red">*</sup> are required</legend>

						<label class="pull-left first">Name: <sup class="red">*</sup></label>
						<input type="text" class="shadow-inset" name="name" id="name" value="<?php if($valid==false)echo $name;?>" />
						<?php if($valid===false AND strlen($name)==0)echo $blank_error;?>

						<label class="pull-left">Phone:</label>
						<input type="text" class="shadow-inset" name="phone" id="phone" value="<?php if($valid==false)echo $phone;?>" />
						

						<label class="pull-left">Email: <sup class="red">*</sup></label>
						<input type="text" class="shadow-inset" name="email" id="email" value="<?php if ($valid==false)echo $email;?>" />
						<?php
						if($valid===false AND strlen($email)==0){
							echo $blank_error;
						}elseif(check_email_address($email)==false){
							echo $email_error;
						}?>

						<label class="pull-left">Message: <sup class="red">*</sup></label>
						<textarea class="shadow-inset" name="message" id="message"><?php echo $preset_message;if($valid==false)echo $message ?></textarea>
						<?php if($valid===false AND strlen($message)==0)echo $blank_error;?>

						<button type="submit" class="btn btn-green clear">Send!</button>
						<input type="hidden" name="did_send" value="true" />
					</form>

					<?php } ?>

				</div>

				<h2>Find Us! <small>Are you in the Greater Los Angeles area?</small></h2>

				<p>Give us a visit! Bel Sogno is located on <em>7236 Pacific Boulevard, Walnut Park, CA.</em> Or you could give us a call at <em>(323) 555-2888</em></p>

				<iframe width="620" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?q=7236+Pacific+Boulevard+Walnut+Park,+California+90255&amp;ie=UTF8&amp;hq=&amp;hnear=7236+Pacific+Blvd,+Walnut+Park,+California+90255&amp;t=m&amp;ll=33.982371,-118.22525&amp;spn=0.028469,0.053129&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
				<br />
				<small><a href="https://maps.google.com/?q=7236+Pacific+Boulevard+Walnut+Park,+California+90255&amp;ie=UTF8&amp;hq=&amp;hnear=7236+Pacific+Blvd,+Walnut+Park,+California+90255&amp;t=m&amp;ll=33.982371,-118.22525&amp;spn=0.028469,0.053129&amp;z=14&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>

			</div>

			<?php include 'includes/aside.php'; ?>
		</div>
	</div>

	<?php include 'includes/footer.php'; ?>
</body>
</html>