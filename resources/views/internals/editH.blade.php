@extends('layouts.app')
@section('content')
<?php
    require "../vendor/autoload.php";
    $client_id = "8WqU9VUDWd73ZNi7LkIMEGv1DcGzNE7X"; //api key
    $client_secret = "rtcOTA6paSXnb2Nf"; //api secret
    
    $client = new GuzzleHttp\Client();
    $token_response = $client->request('POST', 'https://test.api.amadeus.com/v1/security/oauth2/token', [
        'headers' => [
            'Accept'     => 'application/json',
        ],
        'form_params' => [ 
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'grant_type' => 'client_credentials',
         ],
    ]);
    $token_json = (json_decode($token_response->getBody()->getContents()));
    $api_token = $token_json->access_token;
                
    $client2 = new GuzzleHttp\Client();
    $response = $client2->request('GET', 'https://test.api.amadeus.com/v1/travel/analytics/air-traffic/booked?originCityCode=LON&period=2017-08', [
        'headers' => [
            'Authorization' => 'Bearer ' . $api_token
        ],
    ]);
    $destArrays = (json_decode($response->getBody()));
    $destArrays = $destArrays->data;
?>

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
        <div class="btn btn-primary">
            <a href="javascript:history.back()" style='color:white'>Back</a>
        </div>
        <form method="post" action="{{ route('holidays.update', $holidays->travelID) }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Edit Holiday for Flight ') }} {{$holidays->travelID}}</div>

                            <div class="card-body">
                                @csrf
                                @method('PATCH')
                                <div class="form-group row">
                                    <label for="fromDest">From: </label>
                                    <input type="text" class="form-control" name="fromDest"
                                        value="{{$holidays->fromDest}}" />
                                </div>

                                <div class="form-group row">
                                    <label for="toDest">Destination: </label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="toDest" id="toDest">
                                            <?php foreach($destArrays as $dest) { 
                                            ?>
                                            <option value="<?php echo($dest->destination);?>">
                                                <?php echo($dest->destination);
                                            ?>
                                            </option>
                                            <?php } 
                                            ?> </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="adult">Adults: </label>
                                    <input type="number" class="form-control" name="adult"
                                        value="{{$holidays->adult}}" />
                                </div>
                                <div class="form-group row">
                                    <label for="child">Childrens: </label>
                                    <input type="number" class="form-control" name="child"
                                        value="{{$holidays->child}}" />
                                </div>
                                <div class="form-group row">
                                    <label for="elderly">Elderly: </label>
                                    <input type="number" class="form-control" name="elderly"
                                        value="{{$holidays->elderly}}" />
                                </div>

                                <div class="form-group row">
                                    <label for="dateOfFlight">Elderly: </label>
                                    <input type="date" class="form-control" name="dateOfFlight"
                                        value="{{$holidays->dateOfFlight}}" />
                                </div>

                                <div class="form-group row">
                                    <label for="status">Status: </label>
                                    <input type="boolean" class="form-control" name="status"
                                        value="{{$holidays->status}}" />
                                    <br>
                                    <p>0 for Scheduled ; 1 for Completed</p>
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