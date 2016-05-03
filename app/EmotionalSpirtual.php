<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmotionalSpirtual extends Model
{
    //
    
    public function visit()
    
    {
        return $this->belongsTo(visit::class);
    }
    
}
