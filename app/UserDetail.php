<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    public $timestamps = false;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'last_name', 'gender', 'address', 'zipcode', 'city', 'country', 'phone',
    ];


    /**
     * Get the detail that owns the user
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
