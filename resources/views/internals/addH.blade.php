@extends('layouts.app')
@section('content')
<style>
.uper {
    margin-top: 40px;
}
</style>
<div class="card uper">
    <div class="card-header">
        Add Holiday
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{ route('holidays.store') }}">
            <!--@csrf -->
            <button type="submit" class="btn btn-primary">Create Holiday</button>
        </form>
    </div>
</div>
@endsection