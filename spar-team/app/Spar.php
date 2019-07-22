<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spar extends Model
{
    public function catmans(){
        return $this->hasMany(Catman::class);
    }
}
