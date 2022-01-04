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
		<h4 href=# class="main-logo">B <span class="logo-RA">R A</span> S S</h4>
		<?php

		wp_nav_menu(
			array(
				'menu'
			)
		);

		?>
		<span class="dropdown">
			<ul class="menu-items">
				<li class="nav-link"> 
					<a  class="nav-tag" >About BRASS</a>
					 <div class="sub-menu">
						<a class="drop-link" href="https://www.brassstudy.org/about-brass/overview">overview</a>
						<a class="drop-link" href="https://www.brassstudy.org/about-brass/patientstats">patient statistics</a>
					  </div>
				</li>
				 <li class="nav-link"> 
					 <a class="nav-tag">About RA</a>
					 <div class="sub-menu">
						<a class="drop-link" href="https://www.brassstudy.org/about-ra/diseasestats">disease statistics</a>
						<a class="drop-link" href="https://www.brassstudy.org/about-ra/commontreatments">common treatments</a>
					  </div>
				</li>
				 <li class="nav-link"> 
					 <a class="nav-tag" href="#resources">Resources</a>
					 <div class="sub-menu">
						<a class="drop-link" href="https://www.brassstudy.org/resources/forPatients">for patients</a>
						<a class="drop-link" href="https://www.brassstudy.org/resources/forSubjects">for subjects</a>
						<a class="drop-link" href="https://www.brassstudy.org/resources/forResearchers">for researchers</a>
					  </div>
				</li>
				 <li class="nav-link"> 
					 <a class="nav-tag" href="#literature-publications">Literature/Publications</a>
					 <div class="sub-menu">
						<a class="drop-link" href="https://www.brassstudy.org/literature-publications/presentations">presentations</a>
						<a class="drop-link" href="https://www.brassstudy.org/literature-publications/posters">posters</a>
						<a class="drop-link" href="https://www.brassstudy.org/literature-publications/published-works">published works</a>
						<a class="drop-link" href="https://www.brassstudy.org/literature-publications/newsletters">newsletters</a>
					  </div>
				</li>
			</ul>
		</span>
	</nav>
</header>