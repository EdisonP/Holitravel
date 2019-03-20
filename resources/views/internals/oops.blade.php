@extends('layouts.app')
@section('content')
<div class="container">
<h1 style="text-align: center">Oops, You're not where you're supposed to be</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
		<div class="form-group">
				<a class="card" style="text-align: center; font-size: 52px" href="{{ url('/') }}">
        			{{ config('Return home', 'Return home') }}
				</a>
</div>
</div>
</div>
</div>
</div>
@endsection