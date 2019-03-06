@extends('layouts.app')
@section('content')
<h1>View User</h1>
@if(count($users)  > 0)
    @foreach($users as $user)
        <ul class="list-group">
            <li class="list-group-item">First Name: {{$user->fName}}</li>
            <li class="list-group-item">Last Name: {{$user->lName}}</li>
            <li class="list-group-item">Email: {{$user->email}}</li>
        </ul>
    @endforeach
@endif
@endsection