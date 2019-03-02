<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
|--------------------------------------------------------------------------
| Property end points
|--------------------------------------------------------------------------
|
| Howsy Property API endpoints
|
*/
// get list of properties
Route::get('/property', 'Api\propertyController@index');
// get specific property
Route::get('/property/{property_id}', 'Api\PropertyController@show')->where('property', '[0-9]+');
// create new property
Route::post('property','Api\PropertyController@store');



