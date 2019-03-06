<!DOCTYPE PHP>
<html>
<head>
	<title>Holitravel</title>
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
		<a href="index.php" class="logo"><strong>Holitravel</strong></a>
		<nav>
			<a href="#menu">Menu</a>
		</nav>
	</header>
@yield('content')
@include('navbarx')

<!-- Scripts -->
</body>