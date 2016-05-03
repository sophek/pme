<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CenterPosition extends Model
{
    //
    public function center(){
        return $this->belongsTo('center');
    }
    
}
