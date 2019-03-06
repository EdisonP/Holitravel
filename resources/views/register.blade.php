@extends('layouts.app')
@section('content')

<!-- Main -->
<section id="main">
<div class="form-group">
</br>
<h1>Register</h1>

{!! Form::open(['url' => 'register/submit']) !!}
<div class="form-group">
    {{Form::label('fNname', 'First Name:')}}
    {{Form::text('fName', '', ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
</div>
<div class="form-group">
    {{Form::label('lName', 'Last Name:')}}
    {{Form::text('lName', '', ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}
</div>
<div class="form-group">
    {{Form::label('email', 'Email:')}}
    {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter Email'])}}
</div>
<div class="form-group">
    {{Form::label('password', 'Password:')}}
    {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter password'])}}
</div>
<div class="form-group">
    {{Form::label('cPassword', 'Confirm Password:')}}
    {{Form::password('cPassword', ['class' => 'form-control', 'placeholder' => 'Confirm password'])}}
</div>
</br>
<div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
</div>
{!! Form::close() !!}
</div>
</section>
@endsection 
