<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class CenterManagerTableSeeder extends Seeder
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
	        $table = new \App\CenterManager;
            $table->center_id= $index;
            $table->name= $faker->firstName . " " . $faker->lastName;
            $table->cell_phone= $faker->phoneNumber;
            $table->office_phone= $faker->phoneNumber;
            $table->status= $faker->numberBetween($min = 1, $max = 4);
            $table->save();
        } 
    }
}
