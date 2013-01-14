<div class="breadcrumbs">
<?php
	$dA='id="now"';
	if($current=='contact'){
		?>
		<a href="index.php">Home</a> > <a href="contact.php" <?php echo $dA;?>>Contact</a>
		<?php
	}elseif($current=='about'){
		?>
		<a href="index.php">Home</a> > <a href="about.php" <?php echo $dA;?>>About</a>
		<?php
	}elseif ($current=='ideas'){
		?>
		<a href="index.php">Home</a> > <a href="ideas.php" <?php echo $dA;?>>Wedding Ideas</a>
		<?php
	}elseif ($current=='vendors'){
		?>
		<a href="index.php">Home</a> > <a href="vendors.php" <?php echo $dA;?>>Local Vendors</a>
		<?php
	}elseif ($current=='tools'){
		?>
		<a href="index.php">Home</a> > <a href="tools.php" <?php echo $dA;?>>Planning Tools</a>
		<?php
	}elseif ($current=='services'){
		?>
		<a href="index.php">Home</a> > <a href="services.php" <?php echo $dA;?>>Our Services</a>
		<?php
	}elseif ($current=='catering'){
		?>
		<a href="index.php">Home</a> > <a href="services.php">Our Services</a> > <a href="catering.php" <?php echo $dA;?>>Catering</a>
		<?php
	}elseif ($current=='rentals'){
		?>
		<a href="index.php">Home</a> > <a href="services.php">Our Services</a> > <a href="rentals.php" <?php echo $dA;?>>Rentals</a>
		<?php
	}

?>
</div>