@extends('layouts.app')
@section('content')
<!-- Main -->
<section id="main">
<div class="form-group">
</br>
<h1>Login</h1>

{!! Form::open(['url' => 'login/submit']) !!}
<div class="form-group">
    {{Form::label('email', 'Email')}}
    {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter Email'])}}
</div>
<div class="form-group">
    {{Form::label('password', 'Password')}}
    {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter Password'])}}
</div>
</br>
<div>
    {{Form::submit('Login', ['class' => 'btn btn-primary'])}}
</div>
{!! Form::close() !!}
</div>
</section>
@endsection 
