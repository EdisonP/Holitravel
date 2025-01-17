@extends('layouts.app')
@section('content')
<style>
.uper {
    margin-top: 40px;
}
</style>
<div class="card">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br />
    @endif
    <div class="class-body">
    <!-- Holiday Table List -->
    <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Created</td>
                <td>From</td>
                <td>Destination</td>
                <td>Adult</td>
                <td>Child</td>
                <td>Elderly</td>
                <td>Date of Flight</td>
                <td>Status</td>
                <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($holidays as $holiday)
            <tr>
                <td>{{$holiday->travelID}}</td>
                <td>{{$holiday->created_at}}</td>
                <td>{{$holiday->fromDest}}</td>
                <td>{{$holiday->toDest}}</td>
                <td>{{$holiday->adult}}</td>
                <td>{{$holiday->child}}</td>
                <td>{{$holiday->elderly}}</td>
                <td>{{$holiday->dateOfFlight}}</td>
                <!-- status to string-->
                <td><?php if ($holiday->status == 0){
                    echo "Scheduled";
                }else {
                    echo "Completed";
                }?></td>
                 <td><a href="{{ route('holidays.edit',$holiday->travelID)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('holidays.destroy', $holiday->travelID)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
        @endsection