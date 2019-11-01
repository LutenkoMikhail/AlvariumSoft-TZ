<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name_department'
    ];

    public function employee()
    {
        return $this->hasMany(\App\Employee::class);
    }
}
