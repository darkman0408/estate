<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'location_postal_code', 'location_city', 'location_address', 
        'geox', 'geoy',
    ];


    // belongs to relationships

    /**
     * Get the location that owns the property.
     */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
