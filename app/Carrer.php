<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrer extends Model
{
    protected $fillable = [
        'name', 
    ];

    public function student()
    {
        return $this->hasMany('App\Student', 'carrer_id', 'id');
    }

}
