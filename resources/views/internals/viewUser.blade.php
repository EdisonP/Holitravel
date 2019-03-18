@extends('layouts.app')
@section('content')
<h1>View User</h1>

<section id=''>
@foreach($userList as $userList => $data)
    <tr>    
      <th>{{$data->fname}}</th>
      <th>{{$data->lname}}</th>      
      </br>  
    </tr>
</section>
@endforeach

@endsection