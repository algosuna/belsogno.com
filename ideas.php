<?php $ideas='id="current"';$current='ideas';?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Wedding Ideas | Bel Sogno | Your Online Wedding Planner | Catering &amp; Party Rentals for the Greater Los Angeles Area</title>
	<?php include 'includes/css.php';?>
</head>

<body>
	<div class="wrapper">
		<?php include 'includes/header.php'; ?>
		<?php include 'includes/nav.php'; ?>

		<div class="container">
			<?php include 'includes/breadcrumbs.php'; ?>

			<div class="content">
				<h2>Wedding Ideas</h2>
				<p>Need some inspiration? Take a look at our select gallery of Real Weddings!</p>
				<p>Note: This is a quick sample of page content.</p>
				<!--Sorry for the mess, this was sort of last-minute!-->
		        <a class="gallery" href="images/gallery/1.jpg"><img src="images/gallery/1th.jpg" alt="thumbnail" width="300" height="300" /></a>
		        <a class="gallery" href="images/gallery/2.jpg"><img src="images/gallery/2th.jpg" alt="thumbnail" width="300" height="300" /></a>
		        <a class="gallery" href="images/gallery/3.jpg"><img src="images/gallery/3th.jpg" alt="thumbnail" width="300" height="300" /></a>
			</div>

			<?php include 'includes/aside.php'; ?>	

		</div>

	</div>

	<?php include 'includes/footer.php'; ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
	<script>
	jQuery(document).ready(function(){
		jQuery('a.gallery').colorbox({});
	});
	</script>
</body>
</html>