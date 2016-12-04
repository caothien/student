<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    public function role()
    {
        return $this->belongsTo('App\Role');
    }
}
