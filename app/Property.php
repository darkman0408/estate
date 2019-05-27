<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Property extends Model
{
    use Translatable;

    //public $timestamps = false;

    protected $translatable = [
        'slug', 'property_type', 'listing_type', 'energy_efficiency', 'title', 'description',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'date_listed', 'property_type', 'listing_type', 'property_size',
        'land_size', 'price', 'link', 'energy_efficiency', 
        'title', 'description', 'created_by', 'updated_at',
    ];


    // has many relationships

    /**
     * Get the features for the property.
     */
    public function features()
    {
        return $this->hasMany('App\Feature');
    }

    /**
     * Get the contacts for the property.
     */
    public function contacts()
    {
        return $this->hasMany('App\Contact');
    }

    /**
     * Get the locations for the property.
     */
    public function locations()
    {
        return $this->hasMany('App\Location');
    }

    /**
     * Get the images for the property.
     */
    public function images()
    {
        return $this->hasMany('App\Image');
    }

    /**
     * Get the videos for the property.
     */
    public function videos()
    {
        return $this->hasMany('App\Video');
    }

    /**
     * Get the tags for the property.
     */
    public function tags()
    {
        return $this->hasMany('App\Tag');
    }

    /**
     * Get the related employee for the property.
     */
    public function propertyEmployees()
    {
        return $this->hasMany('App\PropertyEmployee');
    }
}
