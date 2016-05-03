<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class HealthServiceTableSeeder extends Seeder
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
	        $table = new \App\HealthServices;
            $table->visit_id=$index;
            $table->professional_visit_id = $faker->numberBetween($min = 1, $max = 8);
            $table->medical_care=$faker->text($maxNbChars = 50);
            $table->hearing_care=$faker->text($maxNbChars = 50);
            $table->vision_care=$faker->text($maxNbChars = 50);
            $table->dental_care=$faker->text($maxNbChars = 50);
            $table->health_screening=$faker->text($maxNbChars = 50);
            $table->other=$faker->text($maxNbChars = 50);
            $table->save();
        }
        
    }
}
