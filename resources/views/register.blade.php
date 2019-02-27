@extends('layouts.app')
@section('burgermenu')

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
@endsection 
