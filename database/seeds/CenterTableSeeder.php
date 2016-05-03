<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class CenterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         $faker = Faker::create();
    	foreach (range(1,100) as $index) {
	        $client = new \App\Center;
            $client->center_code= $faker->stateAbbr . $faker->numberBetween($min = 100, $max = 999) ;
            $client->name= $faker->state ." Center";
            $client->description=$faker->text($maxNbChars = 50);
            $client->save();
            
        } 
        
    }
}
