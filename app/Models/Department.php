<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
    	'name', 'location', 'employee_id',
    ];

    public function workers()
    {
        return $this->hasMany('App\Models\Employee');
    }

    public function boss()
    {
        return $this->belongsTo('App\Models\Employee', 'employee_id');
    }
}
