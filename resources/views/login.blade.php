<!DOCTYPE HTML>
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
				<li><a href="/home">Home</a></li>
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
			<li><a href="/home">Home</a></li>
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
				<li><a href="index.php">Home</a></li>
				<li><a href="/login">Login</a></li>
			</ul>
		</nav>
		<?php
	}
	?>

<!-- Main -->
<section id="main">
	<div class="inner">
		<form action="php/loginF.php" method="POST">
			
			<label class = "col-md-3">E-mail</label>
			<input class = "inp col-md-8" type = "email" name = "email" placeholder = "E-mail" required>
			<br>
			<label class = "col-md-3">Password</label>
			<input class = "inp col-md-8" type = "password" name = "password" placeholder = "Password" required>
			<br>
			<input type = "submit" name = "submit" value = "LOGIN" />
		</form>
	</div>
</section>
<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.scrolly.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/util.js"></script>
<script src="js/main.js"></script>
</body>
</html>
