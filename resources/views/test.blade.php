@extends('layouts.app')
@section('content')

<?php
$params = new Params([
    'authParams' => [
        'officeId' => 'BRUXX1111', //The Amadeus Office Id you want to sign in to - must be open on your WSAP.
        'userId' => 'WSBENXXX', //Also known as 'Originator' for Soap Header 1 & 2 WSDL's
        'passwordData' => 'dGhlIHBhc3N3b3Jk' // **base 64 encoded** password
    ],
    'sessionHandlerParams' => [
        'soapHeaderVersion' => Client::HEADER_V4, //This is the default value, can be omitted.
        'wsdl' => '/home/user/mytestproject/data/amadeuswsdl/1ASIWXXXXXX_PDT_20160101_080000.wsdl', //Points to the location of the WSDL file for your WSAP. Make sure the associated XSD's are also available.
        'stateful' => false, //Enable stateful messages by default - can be changed at will to switch between stateless & stateful.
        'logger' => ''//'new Psr\Log\NullLogger()'
    ],
    'requestCreatorParams' => [
        'receivedFrom' => 'my test project' // The "Received From" string that will be visible in PNR History
    ]
]);

$client = new Client($params);

?>