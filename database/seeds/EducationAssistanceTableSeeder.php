<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class EducationAssistanceTableSeeder extends Seeder
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
	        $table = new \App\EducationAssistance;
            $table->visit_id=$index;
            $table->type_session_id=$faker->numberBetween($min = 1, $max = 2);
            $table->esl=$faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 24);
            $table->finanical_planning=$faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 24);
            $table->mentoring=$faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 24);
            $table->tutoring=$faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 24);
            $table->parenting=$faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 24);
            $table->retirement_planning=$faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 24);
            $table->other=$faker->text($maxNbChars = 50);
            $table->save();
        }
        
        
    }
}
