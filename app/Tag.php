<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tag',
    ];


    // belongs to relationships

    /**
     * Get the tag that owns the property.
     */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
