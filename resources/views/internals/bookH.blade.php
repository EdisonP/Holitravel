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
    $response = $client2->request('GET', 'https://test.api.amadeus.com/v1/travel/analytics/air-traffic/booked?originCityCode=MAD&period=2017-08', [
        'headers' => [
            'Authorization' => 'Bearer ' . $api_token
        ],
    ]);
    $destArrays = (json_decode($response->getBody()));
    $destArrays = $destArrays->data;
    
    //get array to html drop down list

    /*
    foreach($destArrays as $dest){
        echo ($dest->destination) . "\n";
    }
    die;
    */
?>



<div class="container">
    <div class="card">
        <h1>Book Holiday</h1>
        <form>
        </form>
        <div class="card">
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Destination</label>
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
                <label for="name" class="col-md-4 col-form-label text-md-right">Destination</label>
                <div class="col-md-6">
                    <select class="form-control" name="fromDest" id="toDest">
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
                <label for="name" class="col-md-4 col-form-label text-md-right">Destination</label>
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
        </div>
    </div>
</div> @endsection