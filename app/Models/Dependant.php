<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependant extends Model
{
     protected $fillable = [
    	'name', 'address', 'kinship', 'employee_id'
    ];

    public function parents()
    {
        return $this->belongsTo('App\Models\Employee', 'employee_id');
    }
}
