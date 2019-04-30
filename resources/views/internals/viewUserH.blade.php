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
        <h1>View Holiday List</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Booking Date</td>
                    <td>From</td>
                    <td>Destination</td>
                    <td>Adult</td>
                    <td>Child</td>
                    <td>Elderly</td>
                    <td>Date of Flight</td>
                    <td>Status</td>
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
                    <td><?php if ($holiday->status == 0){
                    echo "Scheduled";
                }else {
                    echo "Completed";
                }?></td>
                    <td>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection