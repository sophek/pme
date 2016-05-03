<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    
   public function profile()
   {
       return $this->hasOne(ClientInfo::class);
   } 
   
   public function visits()
    
    {
        return $this->hasMany(Visit::class);
    }
   
   public function relatives()
    
    {
        return $this->hasMany(Relative::class);
    }
   
   public function address()
    
    {
        return $this->hasOne(ClientAddress::class);
    }
    
    public function center()
    
    {
        return $this->belongsTo(Center::class);
    }
    
}
