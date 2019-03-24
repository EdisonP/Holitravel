@extends('layouts.app')
@section('content')
<div class="container">
    <div class="banner">
        <div class="card">
            <div class="card-header">
                <h1>View Users</h1>
                <div class="card-subtitle">
                    <table style="width:100%">
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        @foreach($userList as $userList => $data)
                        <tr>
                            <td>{{$data->fname}}</td>
                            <td>{{$data->lname}}</td>
                            <td>{{$data->email}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection