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
        'id','name', 'surname', 'birthday', 'position_employee', 'payment', 'type_payment_employee', 'department_id'
    ];

    public function department()
    {
        return $this->hasOne(\APP\Department::class);
    }
}
