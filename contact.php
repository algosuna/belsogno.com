<?php require 'db/validate.php'; $contact='id="current"';$current='contact'?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Contact Us | Bel Sogno | Your Online Wedding Planner | Catering &amp; Party Rentals for the Greater Los Angeles Area</title>
	<?php include 'includes/css.php';?>
</head>

<body>
	<div class="wrapper">
		<?php include 'includes/header.php'; ?>
		<?php include 'includes/nav.php'; ?>

		<div class="container">
			<?php include 'includes/breadcrumbs.php'; ?>

			<div class="content">

				<div class="well shadow">
					<form action="" method="post" class="contact" name="contact">
						<legend><small>Fields marked with <sup class="red">*</sup> are required</small></legend>
						<label>Name:</label>
						<input type="text" class="shadow-inset" />

						<label>Phone:</label>
						<input type="text" class="shadow-inset" />

						<label>Email:</label>
						<input type="text" class="shadow-inset" />

						<label>Message:</label>
						<textarea class="shadow-inset"></textarea>

						<button type="submit" class="btn btn-green clear">Send!</button>
					</form>
				</div>
			</div>

			<?php include 'includes/aside.php'; ?>
		</div>
	</div>

	<?php include 'includes/footer.php'; ?>
</body>
</html>