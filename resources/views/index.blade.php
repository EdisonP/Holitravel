@extends('layouts.app')
@section('content')
<!-- Banner -->
<section id="bannerV">
		<video src="assets/holidayVid.mp4" alt="" data-position="center" autoplay muted loop>
</section>

<section id="banner">
<img src="assets/pic03.jpg">
	<h1>Travel at your pace</h1>
</section>

<!-- One -->
<article id="one" class="post style1">
	<div class="image">
		<img src="assets/pic01.jpg" alt="" data-position="80% center" />
	</div>
	<div class="content">
	<div class="inner">
			<header>
				<h2>Holiday with affordable prices!</h2></br>
			</header>
		</div>
	</div>
</article>

<!-- Two -->
<article id="two" class="post invert style1 alt">
	<div class="image">
		<img src="assets/pic02.jpg" alt="" data-position="80% center" />
	</div>
	<div class="content">
	<div class="inner">
			<header>
				<h2>Only the best of holidays!</h2>
			</header>
		</div>
	</div>
</article>

<!-- Three -->
<article id="three" class="post style1">
	<div class="image">
		<img src="assets/pic03.jpg" alt="" data-position="80% center" />
	</div>
	<div class="content">
	<div class="inner">
			<header>
				<h2>What are you waiting for?</h2></br>
				<h2><a href="/register" style="color:red;">Join Us Now!</a><h2>
			</header>
		</div>
	</div>
</article>
@endsection
