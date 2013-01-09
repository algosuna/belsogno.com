<?php $home='id="current"';?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | Bel Sogno | Your Online Wedding Planner | Catering &amp; Party Rentals for the Greater Los Angeles Area</title>
	<?php include 'includes/css.php';?>
	<?php include 'includes/anythingslider.php';?>
</head>

<body>

	<div class="header">
		<a href="/"><img src="" alt="" /></a>
		<h1 class="pull-left"><img src="" alt="Bel Sogno Logo" /></h1>
		<address class="pull-right">
			1234 Fake Street,<br />
			Los Angeles, California 98765
		</address>
	</div>

	<div class="clear-all"></div>

	<div class="nav">
		<ul>
			<li><a href="index.php" <?php echo $home ?>>Inicio</a></li>
			<li><a href="#" <?php echo $directions ?>>Direcci&oacute;n</a></li>
			<li><a href="#" <?php echo $schedule ?>>Horario</a></li>
			<li><a href="#" class="last-item" <?php echo $contact ?>>Contacto</a></li>
		</ul>
	</div>

	<div class="content">
		<!--ANYTHING SLIDER-->
		<div class="slides pull-left">
			<ul id="slider">
				<li><img src="images/slides/1.jpg" alt=""></li>
				<li><img src="images/slides/2.jpg" alt=""></li>
				<li><img src="images/slides/3.jpg" alt=""></li>
				<li><img src="images/slides/4.jpg" alt=""></li>
			</ul>
		</div>

		<div class="contact-form">
			<form>
				<label>Nombre:</label>
				<input type="text" />

				<label>Tel&eacute;fono:</label>
				<input type="text" />

				<label>Email:</label>
				<input type="text" />

				<label>Duda o Comentario:</label>
				<textarea></textarea>
				<div class="clear-all"></div>
			</form>
		</div>

	</div>

</body>
</html>