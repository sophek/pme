<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CenterProfile extends Model
{
    //

    public function center(){
        return $this->belongsTo('center');
    }

}
