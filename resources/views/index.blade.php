<!DOCTYPE PHP>
<html>
<head>
	<title>Travellizer</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="css/main.css" />
</head>
<body>

	<!-- Header -->
	<header id="header">
		<a href="index.php" class="logo"><strong>Travellizer</strong></a>
		<nav>
			<a href="#menu">Menu</a>
		</nav>
	</header>

	<!-- Nav -->
	<?php
	session_start();
	if (isset($_SESSION['SESS_USER'])) {
		?>
		<nav id="menu">
			<ul class="links">
				<li><a href="/">Home</a></li>
				<li><a href="php/logoutF.php">Logout</a></li>
				<li><a href="/bookH">Book Holiday</a></li>
				<li><a href="/viewUserH">View your Holiday</a></li>
				<li><a href="/profile">View Profile</a></li>
			</ul>
		</nav>
		<?php

} else if (isset($_SESSION['SESS_ADMIN'])) {
	?>
	<nav id="menu">
		<ul class="links">
			<li><a href="/">Home</a></li>
			<li><a href="php/logoutF.php">Logout</a></li>
			<li><a href="/viewH">View/Edit Holidays</a></li>
			<li><a href="/viewUser">View/Edit Users</a></li>
		</ul>
	</nav>
		<?php
	} else {
		?>
		<nav id="menu">
			<ul class="links">
				<li><a href="/">Home</a></li>
				<li><a href="/login">Login</a></li>
				<li><a href="/register">Register</a></li>
			</ul>
		</nav>
		<?php
	}
	?>
	<!-- Banner -->
	<section id="banner">
			<video src="assets/holidayVid.mp4" alt="" data-position="center" autoplay muted>
	</section>
	<section id="banner">
	<img src="assets/pic03.jpg">
		<h1>Travel at your pace</h1>
			<ul class="actions">
				<li><a href="#one" class="button alt scrolly big">Continue</a></li>
			</ul>
	</section>

	<!-- One -->
	<article id="one" class="post style1">
		<div class="image">
			<img src="images/juPics/pic01.jpg" alt="" data-position="75% center" />
		</div>
		<div class="content">
			<div class="inner">
				<header>
					<h2><a href="information.html">Information</a></h2>
				</header>
				<p>Information about the Jinjang Utara Community</p>
				<ul class="actions">
					<li><a href="information.html" class="button alt">Read More</a></li>
				</ul>
			</div>
			<div class="postnav">
				<a href="#two" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
			</div>
		</div>
	</article>

	<!-- Two -->
	<article id="two" class="post invert style1 alt">
		<div class="image">
			<img src="images/juPics/pic02.jpg" alt="" data-position="80% center" />
		</div>
		<div class="content">
			<div class="inner">
				<header>
					<h2><a href="events.html">News/Past Events</a></h2>
				</header>
				<p>Photo gallery, newspaper write ups on the events</p>
				<ul class="actions">
					<li><a href="events.html" class="button alt">Read More</a></li>
				</ul>
			</div>
			<div class="postnav">
				<a href="#one" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
				<a href="#three" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
			</div>
		</div>
	</article>

	<!-- Three -->
	<article id="three" class="post style2">
		<div class="image">
			<img src="images/juPics/pic03.jpg" alt="" data-position="80% center" />
		</div>
		<div class="content">
			<div class="inner">
				<header>
					<h2><a href="help.html">How you can help</a></h2>
				</header>
				<p>Volunteers, Learning materials, Children school supplies sponsor a child, E-business</p>
				<ul class="actions">
					<li><a href="help.html" class="button alt">Read More</a></li>
				</ul>
			</div>
			<div class="postnav">
				<a href="#two" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
				<a href="#four" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
			</div>
		</div>
	</article>

	<!-- Four -->
	<article id="four" class="post invert style2 alt">
		<div class="image">
			<img src="images/juPics/pic04.jpg" alt="" data-position="60% center" />
		</div>
		<div class="content">
			<div class="inner">
				<header>
					<h2><a href="donations.html">Donations</a></h2>
				</header>
				<p>Donate now and make a pledge</p>
				<ul class="actions">
					<li><a href="donations.html" class="button alt">Read More</a></li>
				</ul>
			</div>
			<div class="postnav">
				<a href="#three" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
				<a href="#five" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
			</div>
		</div>
	</article>

	<!-- Five -->
	<article id="five" class="post style3">
		<div class="image">
			<img src="images/pic13.jpg" alt="" data-position="10% center" />
		</div>
		<div class="content">
			<div class="inner">
				<header>
					<h2><a href="contact.html">About us</a></h2>
				</header>
				<p>About AGN, Our work and programme</p>
				<ul class="actions">
					<li><a href="contact.html" class="button alt">Read More</a></li>
				</ul>
			</div>

			<div class="postnav">
				<a href="#four" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
				<a href="#six" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
			</div>
		</div>
	</article>

	<!-- Six -->
	<article id="six" class="post invert style3 alt">
		<div class="image">
			<img src="images/pic14.jpg" alt="" data-position="10% center" />
		</div>
		<div class="content">
			<div class="inner">
				<header>
					<h2><a href="contact.html">Jobs</a></h2>
				</header>
				<p>Job offers in the community that you can help with</p>
				<ul class="actions">
					<li><a href="jobs.html" class="button alt">Read More</a></li>
				</ul>
			</div>

			<div class="postnav">
				<a href="#five" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
			</div>
		</div>
	</article>

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.scrolly.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/util.js"></script>
<script src="js/main.js"></script>

</body>
</html>
