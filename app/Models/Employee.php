<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
    	'name', 'cpf', 'address', 'phone', 'salary', 'department_id'
    ];

    public function dependants()
    {
        return $this->belongsToMany('App\Models\Dependant');
    }

    public function workAt()
    {
        return $this->belongsTo('App\Models\Department', 'department_id');
    }

    public function coordinate()
    {
        return $this->hasOne('App\Models\Department', 'employee_id');
    }
}
