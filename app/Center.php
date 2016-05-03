<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    //
    
    public function clients()
    {
        return $this->hasMany('App\Client');
    }
    
    public function managers()
    {
        return $this->hasMany('App\CenterManager');
    }
    
    public function profile()
    {
        return $this->hasOne('App\CenterProfile');
    }
    
    public function position()
    {
        return $this->hasOne('App\CenterPosition');
    }
    
    public function props()
    {
        return $this->hasOne('App\CenterProps');
    }
}
