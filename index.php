<?php $home='id="current"';?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | Bel Sogno | Your Online Wedding Planner | Catering &amp; Party Rentals for the Greater Los Angeles Area</title>
	<?php include 'includes/css.php';?>
	<?php include 'includes/anythingslider.php';?>
</head>

<body>

	<?php include 'includes/header.php';?>

	<?php include 'includes/nav.php';?>

	<div class="container">
		<!--ANYTHING SLIDER-->
		<div class="slides pull-left shadow polaroid">
			<ul id="slider">
				<li><img src="images/slides/1.jpg" alt=""></li>
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

		<div class="quick-links clear">
			<div class="link pull-left">
				<figure>
					<img class="polaroid shadow" src="images/quick-links/1.jpg" width="280" height="80" alt="" border="0" />
					<figcaption>
						<span class="title">Special of the month</span>
						Until January 31st, receive an additional 10% off chairs when presenting the print ad!

					</figcaption>
				</figure>
				<button class="btn btn-blue">View Ad</button>
			</div>
			<div class="link pull-left">
				<figure>
					<img class="polaroid shadow" src="images/quick-links/2.jpg" width="280" height="80" alt="" border="0" />
					<figcaption>
						<span class="title">Honey Moon Ideas</span>
						Looking for the best honeymoon? Learn everything you need to know for the most memorable honeymoon. From weather to packing ckecklist!
					</figcaption>
				</figure>
				<button class="btn btn-blue">View Article</button>
			</div>
			<div class="link pull-right">
				<figure>
					<img class="polaroid shadow" src="images/quick-links/3.jpg" width="280" height="80" alt="" border="0" />
					<figcaption>
						<span class="title">Wedding Cakes</span>
						Visit our updated list of bakers for the Los Angeles area.
			
					</figcaption>
				</figure>
				<button class="btn btn-blue">View List</button>
			</div>
		</div>
	</div>

	<?php include 'includes/footer.php';?>

</body>
</html>