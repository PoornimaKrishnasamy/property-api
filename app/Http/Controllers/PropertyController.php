<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Property;

class PropertyController extends Controller
{
    public function index()
    {
        $count_points = Property::select('property_id', 'latitude', 'longitude')->get();
        
        return view('property.index', compact('property'));
    }

    public function show(Property $property)
    {
        
        return view('property.show', compact(
            'property')
        );
    }
}
