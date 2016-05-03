<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    //
    
    
    public function communityDevelopement()
   {
       return $this->hasOne(CommunityDevelopement::class);
   } 
    
       public function disasterAssistance()
   {
       return $this->hasOne(DisasterAssistance::class);
   } 
    
    
       public function emotionalSpirtual()
   {
       return $this->hasOne(EmotionalSpirtual::class);
   }
    
    
       public function educationAssistance()
   {
       return $this->hasOne(EducationAssistance::class);
   }
    
    
       public function householdAssistance()
   {
       return $this->hasOne(HouseholdAssistance::class);
   }
    
       public function center()
   {
       return $this->hasOne(Center::class);
   }
    
   
}
