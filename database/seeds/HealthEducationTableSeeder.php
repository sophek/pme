<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HealthEducationTableSeeder extends Seeder
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
	        $table = new \App\HealthEducation;
            $table->visit_id=$index;
            $table->cooking=$faker->numberBetween($min = 1, $max = 2);
            $table->stop_smoking=$faker->numberBetween($min = 1, $max = 50);
            $table->stress_management=$faker->numberBetween($min = 1, $max = 10);
            $table->weight_management=$faker->numberBetween($min = 1, $max = 10);
            $table->cpr=$faker->numberBetween($min = 1, $max = 10);
            $table->first_aid_type=$faker->text($maxNbChars = 50);
            $table->first_aid=$faker->numberBetween($min = 1, $max = 10);
            $table->fitness=$faker->numberBetween($min = 1, $max = 10);
            $table->healty_lifestyle=$faker->numberBetween($min = 1, $max = 10);
            $table->other=$faker->text($maxNbChars = 50);
            $table->save();
        }
    }
}
