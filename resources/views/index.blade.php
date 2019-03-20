@extends('layouts.app')
@section('content')
<!-- Banner -->
<div id="bannerV">
		<video class="banner video" src="assets/holidayVid.mp4" alt="" data-position="center" autoplay muted loop>
</div>

<!-- Guest views, before login-->
@guest
<div id="bannerR">
	<img src="assets/pic01.jpg">
	<h1 style="color:black; text-align: center">Travel at your pace</h1>
</div>
<div id="bannerL">
	<img src="assets/pic02.jpg">
	<h1 style="color:black; text-align: center">Explore the wonders</h1>
</div>
@else
<!-- User views, after login-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
		<div class="form-group">
				<a class="card" style="text-align: center" href="{{ url('/') }}">
        			{{ config('app.name', 'Holitravel') }}
				</a>
</div>
</div>
</div>
</div>
@endguest
@endsection