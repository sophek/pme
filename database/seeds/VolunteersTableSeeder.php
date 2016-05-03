<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class VolunteersTableSeeder extends Seeder
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
	        $table = new \App\Volunteer;
            $table->center_id= $index;
            $table->count= $faker->numberBetween($min = 10, $max = 500);
            $table->hours=$faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 500);
            $table->volunteer_date=$faker->date($format = 'Y-m-d', $max = 'now');
            $table->expenses_salary=$faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 5000);
            $table->expenses_other=$faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 5000);
            $table->income_church=$faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 5000);
            $table->income_corp=$faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 5000);
            $table->income_individual=$faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 5000);
            $table->income_fees=$faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 5000);
            $table->income_others=$faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 5000);
            $table->save();
        }
    }
}
