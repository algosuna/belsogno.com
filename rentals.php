<?php $services='id="current"';$current='rentals';?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Wedding Rentals | Bel Sogno | Your Online Wedding Planner | Catering &amp; Party Rentals for the Greater Los Angeles Area</title>
	<?php include 'includes/css.php';?>
</head>

<body id="rentals">
	<div class="wrapper">
		<?php include 'includes/header.php'; ?>
		<?php include 'includes/nav.php'; ?>

		<div class="container">
			<?php include 'includes/breadcrumbs.php'; ?>

			<div class="content">
				
				<h2>Rentals <small>Great selection of chairs and tables!</small></h2>
				<p>We at Bel Sogno have a varied selection of quality chairs and tables. Take a quick look at our inventory and fill out a <a href="contact.php?ref=rentals">contact form</a>.</p>
				
				<?php
		            $view=$_GET['view'];
		            switch($view){
		                case 'folding':
		                    include('folding.php');
		                break;
						case 'stools':
							include('stools.php');
						break;
		                default:
		                    include('rental-main.php');
		            }
		        ?>

  			</div>

			<?php include 'includes/aside.php'; ?>	

		</div>

	</div>

	<?php include 'includes/footer.php'; ?>
</body>
</html>