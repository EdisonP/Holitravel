<!-- Nav -->
<?php
	session_start();
	if (isset($_SESSION['SESS_USER'])) {
		?>
		<nav id="menu">
			<ul class="topnav">
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
		<ul class="topnav">
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
			<ul class="topnav">
				<li><a href="index.php">Home</a></li>
				<li><a href="/login">Login</a></li>
				<li><a href="/register">Register</a></li>
			</ul>
		</nav>
		<?php
	}
	?>    
