<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class directorio extends Model
{

    protected $guarded = [];

    use HasFactory;

    public function directoreable()
    {
        return $this->morphTo();
    }

}
