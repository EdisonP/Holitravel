@extends('layouts.app')
@section('content')
<!-- Banner -->
<section id="bannerV">
		<video src="assets/holidayVid.mp4" alt="" data-position="center" autoplay muted loop>
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
		<img src="assets/pic01.jpg" alt="" data-position="75% center" />
	</div>
	<div class="content">
		<div class="inner">
			<header>
				<h2 color="black">Choose your holiday destination at affordable prices!</h2>
			</header>
		</div>
		<div class="postnav">
			<a href="#two" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
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
				<h2>Only the best of holidays are from us!</h2>
			</header>
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
		<img src="assets/pic03.jpg" alt="" data-position="80% center" />
	</div>
	<div class="content">
	<div class="inner">
			<header>
					<h2>What are you waiting for?</h2></br>
				<h2><a href="/register">Join Us Now!</a><h2>
			</header>
		</div>
		<div class="postnav">
			<a href="#two" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
		</div>
	</div>
</article>
@endsection
