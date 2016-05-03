<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseholdAssistance extends Model
{
    //
    
     public function visit()
   {
       return $this->belongsTo(Visit::class);
   }
}
