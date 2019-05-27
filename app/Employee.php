<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'birth_date', 'first_name', 'last_name', 'gender', 'hire_date',
    ];

    

    // has many relationships

    /**
     * Get the related property for the employee.
     */
    public function propertyEmployees()
    {
        return $this->hasMany('App\PropertyEmployee');
    }

    /**
     * Get the related user for the employee.
     */
    public function userEmployees()
    {
        return $this->hasMany('App\UserEmployee');
    }

}
