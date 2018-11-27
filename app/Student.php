<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'carrer_id', 'name', 'surname', 'document', 'email', 'sex', 'nationality', 'file',
    ];

    public function carrers()
    {
        return $this->belongsTo('App\Carrer', 'carrer_id');
    }
}
