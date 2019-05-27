<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
    ];


    // belongs to relationships

    /**
     * Get the image that owns the property.
     */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
