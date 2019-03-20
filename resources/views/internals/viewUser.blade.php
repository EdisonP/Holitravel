@extends('layouts.app')
@section('content')
<div class="container">
<h1>View Users</h1>

<section id=''>
@foreach($userList as $userList => $data)
    <tr>    
      <th>{{$data->fname}}</th>
      <th>{{$data->lname}}</th>      
      </br>  
    </tr>
</section>
@endforeach
</div>
@endsection