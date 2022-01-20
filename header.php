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
	<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>
<body>
<header> 
	<input class="checkbox" type="checkbox" >
	<button class="menu-icon"></button>
	<nav>
		<h4 href="https://www.brassstudy.org/" class="main-logo">B<span class="logo-RA">RA</span>SS</h4>
		<span class="dropdown-span">
		<?php	
		wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'depth'=> 0, 
				'container' => false,
				'menu_class' => 'dropdown-menu',
				'walker'=> new Walker_Nav_Primary()))
		?>
		</span>
        </nav>
</header>