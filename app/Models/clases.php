<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clases extends Model
{
    use HasFactory;

    public function maestro()
    {
        return $this->belongsTo('App\Models\maestros');
    }
}
