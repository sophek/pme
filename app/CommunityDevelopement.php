<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommunityDevelopement extends Model
{
    //
    
    public function visit()
    
    {
        return $this->belongsTo(visit::class);
    }
    
}
