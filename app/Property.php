<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
	protected $primaryKey = 'property_id';

    public $incrementing = false;

    public $timestamps = false;
    
}
