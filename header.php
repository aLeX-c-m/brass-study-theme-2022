<!doctype html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BRASS</title>
    <?php
            wp_head();
    ?>
	<link href="style.css" rel="stylesheet" type="text/css"> 
	<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>
<body>
<header> 
	<input class="checkbox" type="checkbox" >
	<button class="menu-icon"></button>
	<nav>
		<h4 href="http://www.brassstudy.org" class="main-logo">B<span class="logo-RA">RA</span>SS</h4>
		<span class="dropdown">
			<?php 
				wp_nav_menu( array( 
					'menu' => 'primary',
					'theme-location' => 'primary',
					'container' => false,
					'walker' => new Brass_Nav_Walker()
				) 
			); 
			?>
		</span>
	</nav>
</header>