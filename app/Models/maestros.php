<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maestros extends Model
{
    use HasFactory;

    public function clases()
    {
        return $this->hasMany('App\Models\clases');
    }

    public function directorio()
    {
        return $this->morphOne('App\Models\directorio', 'directoreable');
    }
}
