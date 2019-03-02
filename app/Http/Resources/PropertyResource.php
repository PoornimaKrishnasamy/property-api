<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PropertyResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
	
    public function toArray($request)
    {
        return [
            "property_id" => $this->property_id,            
            "address_line_1" => $this->address_line_1,
            "address_line_2" => $this->address_line_2,
            "postcode" => $this->postcode,            
            "latitude" => $this->latitude,
            "longitude" => $this->longitude           
        ];
    }
}
