<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyEmployee extends Model
{
    protected $fillable = [
        'property_id', 'employee_id',
    ];

    // belongs to relationships

    /**
     * Get the property that owns the property_employee.
     */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }

    /**
     * Get the employee that owns the property_employee.
     */
    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
