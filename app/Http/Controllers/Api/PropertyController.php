<?php

namespace App\Http\Controllers\Api;

//use Cache;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Property;
use App\Http\Resources\PropertyResource as PropertyResource;
use Spatie\Geocoder\Geocoder;

class PropertyController extends Controller
{
	public function index()
    {
        //Get all task
        $properties = Property::paginate(15);
 
        // Return a collection of $task with pagination
        return PropertyResource::collection($properties);
    }
 
    public function show($property_id)
    {
        //Get the task
        $property = Property::findOrfail($property_id);
 
        // Return a single task
        return new PropertyResource($property);
    }
 
   
 
    public function store( Request $request ) {
		$coordinates = array(
			"latitude" => "",
			"longitude" => ""
		);
    	$client = new \GuzzleHttp\Client();

    	$geocoder = new Geocoder( $client );

    	$geocoder->setApiKey( config( 'geocoder.key' ) );

    	$property = $request->isMethod( 'put' ) ? Task::findOrFail( $request->property_id ) : new Property;

    	$property->address_line_1 = $request->input( 'address_line_1' );
    	$property->address_line_2 = $request->input( 'address_line_2' );
    	$property->postcode = $request->input( 'postcode' );
		
		$address = $property->address_line_1." ".$property->address_line_2." ".$property->postcode;
		
		$coordinates = $geocoder->getCoordinatesForAddress( $address );
		$property->latitude = $coordinates->latitude;
		$property->longitude = $coordinates->longitude;
    	$property->user_id = 1; //$request->user()->id;

    	if ( $property->save() ) {
    		return new PropertyResource( $property );
    	}

    }
			
}
