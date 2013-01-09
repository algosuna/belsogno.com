<?php $home='id="current"';?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | Bel Sogno | Your Online Wedding Planner | Catering &amp; Party Rentals for the Greater Los Angeles Area</title>
	<?php include 'includes/css.php';?>
	<?php include 'includes/anythingslider.php';?>
</head>

<body>

	<header class="clear">
		<div class="container">
			<a href="/"><img src="" alt="" /></a>
			<h1 class="pull-left"><a href="index.php"><img src="images/logo.png" alt="Bel Sogno Logo" /></a></h1>
			<h2 class="tagline"></h2>
			<address class="pull-right">
				1234 Fake Street,<br />
				Los Angeles, California 98765
			</address>
		</div>
	</header>

	<div class="nav dark shadow">
		<ul class="container">
			<li><a href="index.php" <?php echo $home ?>>Home</a></li>
			<li><a href="#" <?php echo $services ?>>Our Services</a></li>
			<li><a href="#" <?php echo $tools ?>>Planning Tools</a></li>
			<li><a href="#" <?php echo $locals ?>>Local Vendors</a></li>
			<li><a href="#" <?php echo $ideas ?>>Wedding Ideas</a></li>
			<li><a href="#" <?php echo $about ?>>About</a></li>
			<li><a href="contact.php" <?php echo $contact ?>>Contact Us</a></li>
		</ul>
	</div>

	<div class="container">
		<!--ANYTHING SLIDER-->
		<div class="slides pull-left shadow polaroid">
			<ul id="slider">
				<li><img src="images/slides/1.jpg" alt=""></li>
				<li><img src="images/slides/2.jpg" alt=""></li>
				<li><img src="images/slides/3.jpg" alt=""></li>
				<li><img src="images/slides/4.jpg" alt=""></li>
			</ul>
			<!--
			<ul id="reviews">
				<li>Some review here</li>
				<li>Some other review here</li>
			</ul>
			-->
		</div>

		<div class="contact-form dark shadow">
			<form>
				<legend><small>Questions about our services?</small><br />Contact Us!</legend>
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

		<div class="quick-links">
				<a href="#">Some Link</a>
		</div>
	</div>

	<footer class="dark shadow clear">
		<div class="container">
			<div class="pull-right">
				<address>1894 Unknown St.<br />Los Angeles, CA 91234<br />(555) 123-4567</address>
				<p class="copy"><strong>&copy;2013 Bel Sogno</strong><br />Website by <a href="http://andyosuna.com" target="_blank">Andy Osuna</a></p>
			</div>
			<div class="pull-left">
				<ul>
					<li>Home</li>
					<li>Services
						<ul>
							<li>Catering</li>
							<li>Rentals</li>
						</ul>
					</li>
					<li>Planner
						<ul>
							<li>Log In</li>
							<li>Sign Up</li>
						</ul>
					</li>
				</ul>
				<ul>
					<li>Local Vendors</li>
					<li>Wedding Ideas
						<ul>
							<li>Gallery</li>
						</ul>
					</li>
					<li>Bel Sogno
						<ul>
							<li>About</li>
							<li>Contact</li>
							<li>Contract</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</footer>

</body>
</html>