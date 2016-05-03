<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PmeUtils extends Model
{
    //
    
    public function makeDayCare($num){
        $rs = "Child";
        switch ($num) {
            case '1':
               $rs = "Adult";
                break;
            case '2':
               $rs = "Child";
                break;
            default:
                $rs = "Child";
                break;
        }
        return $rs;
    }
    
    public function makeTypeSession($num){
        $rs = "Individual";
        switch ($num) {
            case '1':
               $rs = "Individual";
                break;
            case '2':
               $rs = "Group";
                break;
            default:
                $rs = "Individual";
                break;
        }
        return $rs;
    }
    
    
    public function makeEducation($num){
        $rs = "";
        
        //'1 year','2 years','3 years','4 years','5 years','6 years','7 years','8 years','9 years','10 years','11 years','12 years','some college','associate degree','bachelor’s degree','graduate degree'
        
        switch ($num) {
            case "1":
                $rs = "1 year'";
                break;
            case "2":
                $rs = "2 years";
                break;
            case "3":
                $rs = "3 years";
                break;
            case "4":
                $rs = "4 years";
                break;
            case "5":
                $rs = "5 years";
                break;
            case "6":
                $rs = "6 years";
                break;
            case "7":
                $rs = "7 years";
                break;
            case "8":
                $rs = "8 years";
                break;
            case "9":
                $rs = "9 years";
                break;
                case "10":
                $rs = "10 years";
                break;
                case "11":
                $rs = "11 years";
                break;
                case "12":
                $rs = "12 years";
                break;
                case "13":
                $rs = "some college";
                break;
                case "14":
                $rs = "associate degree";
                break;
                case "15":
                $rs = "bachelor’s degree";
                break;
                case "16":
                $rs = "graduate degree";
                break;                            
            default:
                # code...
                $rs = "12 years";
                break;
        }
        
        return $rs;
    }
    
    public function makeRelationship($num){
        $rs = "";
        switch ($num) {
            case "1":
                $rs = "Grandparent";
                break;
            case "2":
                $rs = "Daughter";
                break;
            case "3":
                $rs = "Father";
                break;
            case "4":
                $rs = "Husband";
                break;
            case "5":
                $rs = "Mother";
                break;
            case "6":
                $rs = "Other Adult";
                break;
            case "7":
                $rs = "Son";
                break;
            case "8":
                $rs = "Wife";
                break;
            case "9":
                $rs = "Other Minor";
                break;                            
            default:
                # code...
                $rs = "Grandparent";
                break;
        }
        
        return $rs;
    }
    
    public function makeRace($num){
        $rs = "";
        switch ($num) {
            case "1":
                $rs = "American Indian";
                break;
            case "2":
                $rs = "Asian/Indian";
                break;
            case "3":
                $rs = "Black";
                break;
            case "4":
                $rs = "Hispanic";
                break;
            case "5":
                $rs = "White";
                break;
            default:
                # code...
                $rs = "White";
                break;
        }
        return $rs;
    }
    
   public function makeGender($num)
   {
       $rs = "M";
       switch ($num) {
           case '1':
               $rs = "M";
               break;
           case '2':
               $rs = "F";
               break;
           default:
               # code...
               $rs = "M";
               break;
       }
       return $rs;
   } 
    
    public function makeMarital($num)
   {
       
       $rs = "Single";
       switch ($num) {
           case '1':
               $rs = "Divorced";
               break;
           case '2':
               $rs = "Married";
               break;
           case '3':
               $rs = "Separated";
               break;
           case '4':
               $rs = "Single";
               break;
               case '5':
               $rs = "Widowed";
               break;
           default:
               # code...
               $rs = "Single";
               break;
       }
       return $rs;
   } 
    
   public function makeSuffix($num)
   {
       
       $list = ['Jr.','Sr.','II','III','IV','V']; 
        
       $rs = "Jr.";
       switch ($num) {
           case '1':
               $rs = "Jr.";
               break;
           case '2':
               $rs = "Sr.";
               break;
               case '3':
               $rs = "II";
               break;
               case '4':
               $rs = "III";
               break;
               case '5':
               $rs = "IV";
               break;
               case '6':
               $rs = "V";
               break;
           default:
               # code...
               $rs = "Jr.";
               break;
       }
       return $rs;
   }  
    
}
