@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group">
                <div class="modal-dialog">
                    <div class="card">
                        <h1 style="text-align: center">Oops, You just arrived into the wrong neighbourhood</h1>
                        </br>
                        <h4 style="text-align: center; color: blue">You will be redirected shortly............</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Timeout script -->
<script>
setTimeout(function() {
    window.location = "/"
}, 3000);
</script>
@endsection