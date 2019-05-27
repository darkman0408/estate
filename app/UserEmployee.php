<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEmployee extends Model
{
    //

    // belongs to relationships

    /**
     * Get the user that owns the user_employee.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the employee that owns the user_employee.
     */
    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
