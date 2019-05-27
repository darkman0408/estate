<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'business_title', 'contact_name', 'contact_surname', 'contact_address', 
        'contact_addressno', 'contact_zipcode', 'contact_city', 'contact_phone',
        'contact_mobile', 'contact_fax', 'contact_email',
    ];


    // belongs to relationships

    /**
     * Get the contact that owns the property.
     */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
