<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\PmeUtils as PmeUtils;

class CommunityDevelopementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $pme= new \App\PmeUtils;
        $faker = Faker::create();
    	foreach (range(1,100) as $index) {
	        $table = new \App\CommunityDevelopement;
            $table->visit_id=$index;
            $table->daycare_id=$faker->numberBetween($min = 1, $max = 2);
            $table->daycare_hour=$faker->numberBetween($min = 1, $max = 4);;
            $table->shelter_id=$faker->numberBetween($min = 1, $max = 2);;
            $table->shelter_hour=$faker->numberBetween($min = 1, $max = 10);;
            $table->transportation_mile=$faker->numberBetween($min = 1, $max = 100);;
            $table->job_training_hour=$faker->numberBetween($min = 1, $max = 100);;
            $table->legal_assistance_hour=$faker->numberBetween($min = 1, $max = 100);;
            $table->monentary_assistance=$faker->numberBetween($min = 1, $max = 2200);;
            $table->onsite_feeding_meal=$faker->numberBetween($min = 1, $max = 100);;
            $table->other_assistance=$faker->text($maxNbChars = 200);
            $table->save();
        }
        
           
    }
}
