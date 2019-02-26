<!DOCTYPE HTML>
<html>
<head>
	<title>Register</title>
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
    
<!-- Main -->
<section id="main">
	<div class="inner">
		<h1>Register</h1>
		<p>Please fill in this form to create an account.</p>
		<br>
		<form action = "php/registerF.php" method = "POST">
			<b>Enter your first name</b>
			<input type = "text" placeholder ="Enter your first name" name="fname" required>
            </br>
            <b>Enter your last name</b>
			<input type = "text" placeholder ="Enter your last name" name="lname" required>
            </br>
            <b>Enter your email address</b>
            <input type = "email" placeholder ="Enter Email" name="email" required>
            </br>
            <b>Enter your password</b>
            <input type="password" placeholder="Enter Password" name="password" required>
            </br>
            <b>Confirm your password</b>
            <input type="password" placeholder="Confirm Password" name="cspassword" required>
            </br>
            <input type="submit" class="pure-button pure-button-primary" value="SIGN UP"></button>
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
