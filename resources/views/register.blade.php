@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('/register') }}">
                        {{ csrf_field() }}
 
                        <div class="form-group{{ $errors->has('fName') ? ' has-error' : '' }}">
                            <label for="fName" class="col-md-4 control-label">fName</label>
 
                            <div class="col-md-6">
                                <input id="fName" type="text" class="form-control" fName="fName" value="{{ old('fName') }}" required autofocus>
 
                                @if ($errors->has('fName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('/register') }}">
                        {{ csrf_field() }}
 
                        <div class="form-group{{ $errors->has('fName') ? ' has-error' : '' }}">
                            <label for="fName" class="col-md-4 control-label">fName</label>
 
                            <div class="col-md-6">
                                <input id="fName" type="text" class="form-control" fName="fName" value="{{ old('fName') }}" required autofocus>
 
                                @if ($errors->has('fName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
 
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" fName="email" value="{{ old('email') }}" required>
 
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="mobile" class="col-md-4 control-label">Mobile Number</label>
 
                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control" fName="mobile" value="{{ old('mobile') }}">
 
                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
 
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" fName="password" required>
 
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
 
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" fName="password_confirmation" required>
                            </div>
                        </div>
 
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection
<!-- Main -->
<!--
<section id="main">
<div class="form-group">
</br>
<h1>Register</h1>

{!! Form::open(['url' => 'register/submit']) !!}
<div class="form-group">
    {{Form::label('fNfName', 'First fName:')}}
    {{Form::text('ffName', '', ['class' => 'form-control', 'placeholder' => 'Enter First fName'])}}
</div>
<div class="form-group">
    {{Form::label('lfName', 'Last fName:')}}
    {{Form::text('lfName', '', ['class' => 'form-control', 'placeholder' => 'Enter Last fName'])}}
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
-->