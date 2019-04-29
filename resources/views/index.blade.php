@extends('layouts.app')
@section('content')
<!-- Banner -->
<div class ="card">


<!-- Guest views, before login-->
@guest
<div id="banner" style="text-align: center">
    <video class="banner-video" src="assets/holidayVid.mp4" alt="" data-position="center" autoplay muted loop>
</div>
<hr>
<div id="bannerR">
    <img src="assets/pic01.jpg">
    <div class="card">
        <h1 style="color: black; text-align: center">Travel at your pace</h1>
    </div>
</div>
<hr>
<div id="bannerL">
    <img src="assets/pic02.jpg">
    <div class="card">
        <h1 style="color: black; text-align: center">Explore the wonders</h1>
    </div>
</div>
@else
<?php
$userID = Auth::id();
if ($userID != 1){
?>
<div id="banner" style="text-align: center">
    <video class="banner-video" src="assets/holidayVid.mp4" alt="" data-position="center" autoplay muted loop>
</div>
<hr>
<div id="bannerR">
    <img src="assets/pic01.jpg">
    <div class="card">
        <h1 style="color: black; text-align: center">Book your holiday now</h1>
    </div>
</div>
<?php
} else{
?>
<div id="banner" style="text-align: center">
    <div class="card">
        <h1 style="color: black; text-align: center">Welcome Admin</h1>
    </div>
</div>
<?php
}
?>
@endguest
</div>
@endsection