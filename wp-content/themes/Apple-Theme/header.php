<?php

/**
 * 
 * The header
 * Template displays the head section
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo(show: "charset"); ?>">
	<?php wp_head(); ?>
	<!--Add our custom css file-->
	<link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/Apple-Theme/assets/css/app.css')); ?>">
	<!-- custom-font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
	<header>

		<nav>
			<div class="logo-holder">
				<a href="<?php echo esc_url(home_url()); ?>">
					<img src="<?php echo esc_url(home_url('wp-content/uploads/2023/04/1218776_company_logo_apple_ipad_iphone_icon.png')); ?>" alt="header logo">
				</a>
			</div>

			<div>

				<?php
				wp_nav_menu(array(

					'menu' => 'main',
					'theme_location' => '',
					'depth' => 2,
					'fallback_cb' => false
				));
				?>
			</div>
		</nav>


	</header>