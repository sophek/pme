<?php

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        
         $statesname = ["Select State","ALASKA"," ALABAMA","ARKANSAS","ARIZONA","CALIFORNIA","COLORADO","CONNECTICUT","DISTRICT OF COLUMBIA","DELAWARE","FLORIDA","GEORGIA","HAWAII","IOWA","IDAHO","ILLINOIS","INDIANA","KANSAS","KENTUCKY","LOUISIANA","MASSACHUSETTS","MARYLAND","MAINE","MICHIGAN"," MINNESOTA","MISSISSIPPI","MONTANA","NORTH CAROLINA","NORTH DAKOTA","NEBRASKANEW HAMPSHIRE","NEW JERSEY","NEW MEXICO"," NEVADA","NEW YORK","OHIO","OKLAHOMA"," OREGON","PENNSYLVANIA"," PUERTO RICO","RHODE ISLAND","SOUTH CAROLINA","SOUTH DAKOTA","TENNESSEE","TEXAS","UTAH","VIRGINIA","VERMONT","WASHINGTON"," WISCONSIN","WEST VIRGINIA"," WYOMING","MISSOURI","Alberta","British Columbia","Manitoba","New Brunswick","Newfoundland and Labrador","Northwest Territories","Nova Scotia","Ontario","Prince Edward Island","Quebec","Saskatchewan","Yukon","Nunavut"];
    	
        $statesAbbr = ["ZZ","AK","AL","AR","AZ","CA","CO","CT","DC","DE","FL","GA","HI","IA","ID","IL","IN","KS","KY","LA","MA","MD","ME","MI","MN","MS","MT","NC","ND","NE","NH","NJ","NM","NV","NY","OH","OK","OR","PA","PR","RI","SC","SD","TN","TX","UT","VA","VT","WA","WI","WV","WY","MO","AB","BC","MB","NB","NL","NT","NS","ON","PE","QC","SK","YT","NU"];
        
        
        for ($i=0; $i < count($statesname); $i++) { 
            $state = new \App\State;
            $state->name =  $statesname[$i];
            $state->abbr =  $statesAbbr[$i];
            $state->pos =  $i;
            $state->save();
        }
        
    }
}
