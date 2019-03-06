@extends('layouts.app')
@section('content')
<h1>View User</h1>
@if(count($users)  > 0)
    @foreach($users as $users)
        <ul class="list-group">
            <li class="list-group-item">First Name: {{$users->fName}}</li>
            <li class="list-group-item">Last Name: {{$users->lName}}</li>
            <li class="list-group-item">Email: {{$users->email}}</li>
        </ul>
    @endforeach
@endif
@endsection