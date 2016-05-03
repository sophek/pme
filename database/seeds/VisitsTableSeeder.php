<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class VisitsTableSeeder extends Seeder
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
	        $visit = new \App\Visit;
            $visit->client_id= $index;
            $visit->save();
        }
        
    }
    
    
}
