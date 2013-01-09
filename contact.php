<?php require 'db/validate.php'; $contact='id="current"';?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Contact Us | Bel Sogno | Your Online Wedding Planner | Catering &amp; Party Rentals for the Greater Los Angeles Area</title>
	<?php include 'includes/css.php';?>
</head>

<body>
	<?php include 'includes/header.php'; ?>
	<?php include 'includes/nav.php'; ?>

	<div class="container clear">
		<?php include 'includes/breadcrumbs.php'; ?>

		<div class="content clear">
			<form action="contact.php" method="post" class="contact" name="contact">
				<?php
				if($valid==true){
					if($mail_sent==1){
						echo $success;
					}else{
						echo $db_error;
					}
				}else{
				?>
				<label for="name">Name:</label>
				<input type="text" name="name" id="name" value="<?php if($valid==false)echo$name?>" placeholder="Your Name" />
				<?php if($valid==false AND strlen($name)==0)echo$blank_error?>

				<label for="email">Email:</label>
				<input type="text" name="email" id="email" value="<?php if($valid==false)echo$email?>" placeholder="Your Email" />
				<?php if($valid==false AND check_email_address($email)==false)echo$email_error?>

				<?php
				}			
				?>
			</form>
		</div>

		<?php include 'includes/aside.php'; ?>	

	</div>

	<?php include 'includes/footer.php'; ?>
</body>
</html>