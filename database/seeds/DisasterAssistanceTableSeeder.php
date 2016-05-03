<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DisasterAssistanceTableSeeder extends Seeder
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
	        $table = new \App\DisasterAssistance;
            $table->visit_id=$index;
            $table->bedding=$faker->numberBetween($min = 1, $max = 2);
            $table->clothing=$faker->numberBetween($min = 1, $max = 50);
            $table->groceries=$faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 500);
            $table->personal_care_kit=$faker->numberBetween($min = 1, $max = 10);
            $table->cleaning_supplies=$faker->numberBetween($min = 1, $max = 10);
            $table->diapers=$faker->numberBetween($min = 1, $max = 10);
            $table->other=$faker->text($maxNbChars = 50);
            $table->save();
        }
        
        
    }

}
