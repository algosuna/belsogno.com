<?php
require 'db/validate.php';
$home='id="current"';
$current='home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home | Bel Sogno | Your Online Wedding Planner | Catering &amp; Party Rentals for the Greater Los Angeles Area</title>
	<?php include 'includes/css.php';?>
	<?php include 'includes/anythingslider.php';?>
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

		<?php include 'includes/header.php';?>
		<?php include 'includes/nav.php';?>

		<div class="container">
			<!--ANYTHING SLIDER-->
			<div class="slides pull-left shadow polaroid">
				<ul id="slider">
					<li><a href="specials.php"><img src="images/slides/3.jpg" alt="Catering Special"></a></li>
					<li><img src="images/slides/1.jpg" alt="Honeymoon Ideas"></li>
					<li><img src="images/slides/2.jpg" alt="Catering Services"></li>
				</ul>
			</div>

			<div class="contact-form dark shadow">
				<?php 
				if($valid==true){
					if($mail_sent==1){
						echo $success;
					}else{
						echo $db_error;
					}
				}else{ ?>
					<form action="index.php" method="post">
						<legend><small>Questions about our services?</small><br />Contact Us!</legend>

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

			<div class="quick-links">
				
				<div class="link pull-left">
					<figure>
						<img class="polaroid shadow" src="images/quick-links/1.jpg" width="280" height="80" alt="" border="0" />
						<figcaption>
							<span class="title">Special of the month</span>
							Until January 31st, receive an additional 10% off chairs when presenting the print ad!
						</figcaption>
					</figure>
					<button class="btn btn-lblue">View Ad</button>
				</div>
				
				<div class="link pull-left">
					<figure>
						<img class="polaroid shadow" src="images/quick-links/2.jpg" width="280" height="80" alt="" border="0" />
						<figcaption>
							<span class="title">Honey Moon Ideas</span>
							Looking for the best honeymoon? Learn everything you need to know for the most memorable honeymoon. From weather to packing ckecklist!
						</figcaption>
					</figure>
					<button class="btn btn-lblue">View Article</button>
				</div>
				
				<div class="link pull-right">
					<figure>
						<img class="polaroid shadow" src="images/quick-links/3.jpg" width="280" height="80" alt="" border="0" />
						<figcaption>
							<span class="title">Wedding Cakes</span>
							Visit our updated list of bakers for the Los Angeles area.
				
						</figcaption>
					</figure>
					<button class="btn btn-lblue">View List</button>
				</div>

			</div>
		</div>
	</div>

	<?php include 'includes/footer.php';?>
</body>
</html>