<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Feature extends Model
{
    use Translatable;

    public $timestamps = false;

    protected $translatable = [
        'condition', 'floor',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bedrooms', 'bathrooms', 'rooms', 'condition',
        'age', 'floor',
    ];


    // belongs to relationships

    /**
     * Get the feature that owns the property.
     */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
