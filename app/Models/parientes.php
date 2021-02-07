<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parientes extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\alumnos');
    }

    public function directorio()
    {
        return $this->morphOne('App\Models\directorio', 'directoreable');
    }

}
