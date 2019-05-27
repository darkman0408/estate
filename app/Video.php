<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'video',
    ];


    // belongs to relationships

    /**
     * Get the video that owns the property.
     */
    public function property()
    {
        return $this->belongsTo('App\Video');
    }
}
