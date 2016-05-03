<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class EmotionalSpirtualTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
    	foreach (range(1,100) as $index) {
	        $table = new \App\EmotionalSpirtual;
            $table->visit_id=$index;
            $table->type_session_id=$faker->numberBetween($min = 1, $max = 2);
            $table->grief_care=$faker->numberBetween($min = 1, $max = 50);
            $table->crisis_care=$faker->numberBetween($min = 1, $max = 50);
            $table->end_of_life_care=$faker->numberBetween($min = 1, $max = 50);
            $table->visitation=$faker->numberBetween($min = 1, $max = 10);
            $table->other_care=$faker->text($maxNbChars = 50);
            $table->save();
        }
        
        
    }
}
