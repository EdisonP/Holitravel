@extends('layouts.app')
@section('burgermenu')
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
@endsection
