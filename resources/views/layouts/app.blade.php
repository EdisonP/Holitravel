<!DOCTYPE PHP>
<html>
<head>
	<title>Travellizer</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="css/app.css" />
</head>
<body>

<!--Error Handling -->
<div class="container">
	<div class="row">
		@if(count($errors) > 0)
			@foreach($errors->all() as $error)
				<div class="alert alert-warning">
</br>
				{{$error}}
				</div>
			@endforeach
		@endif

		@if(session ('registerSuccess'))
		<div class="alert alert-success">
</br>
			{{session('registerSuccess')}}
		</div>
		@endif
	</div>
</div>

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
	<nav id="nav nav-tabs">
		<ul class="nav nav-links">
			<li><a href="/home">Home</a></li>
			<li><a href="php/logoutF.php">Logout</a></li>
			<li><a href="/viewH">View/Edit Holidays</a></li>
			<li><a href="/viewUser">View/Edit Users</a></li>
		</ul>
	</nav>
		<?php
	} else {
		?>
		<nav id="nav">
			<ul class="nav nav-links">
				<li><a href="index.php">Home</a></li>
				<li><a href="/login">Login</a></li>
				<li><a href="/register">Register</a></li>
			</ul>
		</nav>
		<?php
	}
	?>    

@yield('content')

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.scrolly.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/util.js"></script>
<script src="js/main.js"></script>
</body>