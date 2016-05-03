<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class CenterProfileTableSeeder extends Seeder
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
	        $table = new \App\CenterProfile;
            $table->center_id= $index;
            $table->address= $faker->streetAddress;
            $table->description= $faker->text($maxNbChars = 200);
            $table->city= $faker->city;
            $table->state= $faker->state;
            $table->phone= $faker->phoneNumber;
            $table->postal_code= $faker->postcode;
            $table->county= $faker->citySuffix;
            $table->country= "US";
            $table->save();
        } 
    }
}
