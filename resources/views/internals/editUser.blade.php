@extends('layouts.app')
@section('content')
<style>
.uper {
    margin-top: 40px;
}
</style>
<div class="card uper">
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
        <form method="post" action="{{ route('users.update', $users->id) }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Edit User') }}</div>

                            <div class="card-body">
                                <div class="form-group">
                                    @csrf
                                    @method('PATCH')
                                    <label for="fname">First Name :</label>
                                    <input type="text" class="form-control" name="fname" value="{{$users->fname}}" />
                                </div>
                                <div class="form-group">
                                    <label for="lname">Last/Sir Name :</label>
                                    <input type="text" class="form-control" name="lname" value="{{$users->lname}}" />
                                </div>
                                <button type="submit" class="btn btn-primary">Update user</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection