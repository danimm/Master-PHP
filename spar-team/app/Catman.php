<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catman extends Model
{
    protected $table = 'catmans';
    public function spar(){
        return $this->belongsTo(Spar::class);
    }
}
