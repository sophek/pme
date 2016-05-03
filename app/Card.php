<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //
    
    public function notes()
    {
        # code...
        return $this->hasMany(Note::class);
    }
    
}
