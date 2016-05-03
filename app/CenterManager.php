<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CenterManager extends Model
{
    //
    
    public function center() {
        return $this->belongsTo('center');
    }
}
