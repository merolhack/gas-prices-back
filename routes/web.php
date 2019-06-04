<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return "Sepomex Postal Codes & Gas Prices API with Slim + MySQL Database";
});

// Gets the gas-prices from the API
$router->get('/gas-prices', function () {
    $client = new \GuzzleHttp\Client();
    $request = $client->get('https://api.datos.gob.mx/v1/precio.gasolina.publico?pageSize=10018');
    $response = json_decode($request->getBody(), true);
    return $response;
});

// Gets the states from the database
$router->get('/states', function () {
    $results = DB::table('zip-codes')
        ->select('c_estado AS id', 'd_estado AS name')
        ->groupBy('zip-codes.c_estado')
        ->get();
    return json_encode($results);
});

// Gets the municipalities from the database
$router->get('/municipalities/{stateId}', function ($stateId = 01) {
    $results = DB::table('zip-codes')
        ->select('c_mnpio AS id', 'd_mnpio AS name', 'd_codigo AS zip')
        ->where('c_estado', $stateId)
        ->groupBy('zip-codes.d_mnpio')
        ->get();
    return json_encode($results);
});
